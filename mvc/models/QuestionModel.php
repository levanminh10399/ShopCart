<?php

use MongoDB\Operation\Find;
use MongoDB\Operation\FindOne;

class QuestionModel extends DBMongo
{
    public function findAll($page = 1)
    {
        $limit = 3;
        $skip = ($page - 1) * $limit;
        $sort = array('created' => -1);
        $options = ['limit' => $limit, 'skip' => $skip, 'sort' => $sort];
        $collection = $this->db->selectCollection("QUESTIONS");
        $cursor = $collection->find(['isDeleted' => false], $options);
        return $cursor;
    }
    public function countPage()
    {
        $quesCount = count($this->db->selectCollection("QUESTIONS")->find(["isDeleted" => false])->toArray());
        return ceil($quesCount / 3);
    }
    public function findTagsOfQuestion($idQues)
    {
        $collection = $this->db->selectCollection("QUESTIONS");
        $tags_question = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($idQues)], ['projection' => ['tags' => 1]]);
        if ($tags_question != null && $tags_question->tags != null && count($tags_question->tags) != 0) {
            return $tags_question->tags;
        }
        return [];
    }
    public function findOtherTags($idQues)
    {
        $collection = $this->db->selectCollection("QUESTIONS");
        $tags_question = $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($idQues)], ['projection' => ['tags' => 1]]);
        $filter = array();
        if ($tags_question != null && $tags_question->tags != null && count($tags_question->tags) != 0) {
            foreach ($tags_question->tags as $item) {
                $tag_array[] = $item->id;
            }
            $filter = array('_id' => ['$nin' => $tag_array]);
        }
        $collection = $this->db->selectCollection("TAGS");
        $other_tags = $collection->find($filter);
        return ($other_tags->toArray());
    }
    public function deleteTag($info = [])
    {
        $collection = $this->db->selectCollection("QUESTIONS");
        try {
            $result = $collection->findOneAndUpdate(
                ['_id' => new MongoDB\BSON\ObjectId($info["quesId"])],
                ['$pull' => ['tags' => ['id' => new MongoDB\BSON\ObjectId($info['tagId'])]]],
                ['returnDocument' => MongoDB\Operation\FindOneAndUpdate::RETURN_DOCUMENT_AFTER]
            );
            return $result;
        } catch (Exception $e) {
            return null;
        }
    }
    public function updateTags($array_tags = [], $id_question)
    {
        try {
            $collection = $this->db->selectCollection("QUESTIONS");
            $result = $collection->updateOne(
                ['_id' => new MongoDB\BSON\ObjectId($id_question)],
                ['$set' => ['tags' => []]],
            );
            if ($array_tags != []) {
                $result = $collection->updateOne(
                    ['_id' => new MongoDB\BSON\ObjectId($id_question)],
                    ['$addToSet' => ['tags' => ['$each' => $array_tags]]],
                    ['upsert' => true],
                );
                return $result;
            }
        } catch (Exception $e) {
            return null;
        }
    }
}
