<?php
    class PingPong
    {
        function makePingPong($input)
        {
            $newList = array();
            $input_number = intval($input);

            for ($list = 1; $list <= $input_number; $list++) {
            array_push($newList, $list);
            }
            for ($i = 0; $i < $input_number; $i++)
            {
                if ( $newList[$i] % 3 == 0 ) {
                    $newList[$i] = "ping";
                }

            }

            return $newList;
        }
    }
?>
