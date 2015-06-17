<?php

namespace rest\models;


class News extends BaseModel
{
    public $table = 'post';

    /**
     * @param array $criteria
     * Example:
     * ['id' => {int}, 'category' => {str}, 'order' => {str}, 'direction' => {str}, 'page' => {int}]
     * @return array
     */
    public function find($criteria)
    {
        $sql = "SELECT *";
        $sql .= " FROM $this->table";
        if (isset($criteria['category'])) {
            $sql .= " LEFT JOIN category ON category_id = category.id";
            $sql .= " WHERE category.name = '" . $criteria['category'] . "'";
        } else {
            $sql .= " WHERE 1";
        }
        if (isset($criteria['id'])) {
            $sql .= " AND id = " . $criteria['id'];
        }
        if (isset($criteria['order'])) {
            $sql .= " ORDER BY " . $criteria['order'];
            if (isset($criteria['direction'])) {
                $sql .= " " . $criteria['direction'];
            }
        }
        if (isset($criteria['page'])) {
            $sql .= " LIMIT "
            . ($criteria['page']-1)*$this->partition
            . ", " . $this->partition;
        }

        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
} 