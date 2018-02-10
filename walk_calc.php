<?php

class walk_calc
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
        $countStart = $start;
        while ($start < $goal) {
            $start += $move;
            $count++;
        }
        $result = array(
            "start" => $countStart,
            "count" => $count,
            "goal" => $start,
            "move" => $move,
        );
        return $result;
    }

    public function setName($name = null)
    {
        if (!empty($name)) {
            $result1 = $name;
            return $result1;
        } else {
            return 'ななしくん';
        }
    }

}

$const = new walk_calc();
$name = $const->setName(($_POST['name']));
$ww = $const->walk(($_POST['start']), ($_POST['goal']), ($_POST['move']), $const->count);
var_dump($name);
echo $name . 'はスタートが' . $ww['start'] . '。ゴールは' . $ww['goal'] . 'だった。それで歩ける幅は' . $ww['move'] . 'だったが頑張って' . $ww['count'] . '歩いてゴールについた！';