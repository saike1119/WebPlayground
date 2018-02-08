<?php

class WalkCount
{
    public $count = 0;

    /**
     * @param int $start
     * @param int $goal
     * @param int $move
     * @param int $count
     * @return array
     */
    static public function walk($start, $goal, $move, $count)
    {
        $conststart = $start;
        while ($start < $goal) {
            $start += $move;
            $count++;
        }
        $result = array(
            "start" => $conststart,
            "count" => $count,
            "goal" => $start,
            "move" => $move,
        );
        return $result;
    }
}