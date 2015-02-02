{"changed":true,"filter":false,"title":"baseDeDonnee.php","tooltip":"/class/baseDeDonnee.php","value":"<?php\n\nclass Bd\n    {\n        public static function getMysqlConnexionWithPDO()\n        {\n        $db = new PDO('mysql:host=localhost;dbname=c9', 'jeanar', '');\n        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);\n        return $db;\n        }\n        \n        public static function getMysqlConnexionWithMySQLi()\n        {\n        return new MySQLi('localhost', 'jeanar', '', 'c9');\n        }\n    }\n?>\n","undoManager":{"mark":90,"position":91,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":3},"end":{"row":0,"column":6},"action":"remove","lines":["php"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":25},"action":"insert","lines":["<a href=\"mailto:\"></a>"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":19},"end":{"row":1,"column":0},"action":"insert","lines":["",""]},{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":1,"column":10},"action":"remove","lines":["<? <a href=\"mailto:","    \"></a>"]},{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"remove","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"remove","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":3,"column":1},"action":"insert","lines":["?"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":[">"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":14,"column":1},"action":"insert","lines":["<?php","class DBFactory","{","public static function getMysqlConnexionWithPDO()","{","$db = new PDO('mysql:host=localhost;dbname=mypizza', 'root', '');","$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);","return $db;","}","public static function getMysqlConnexionWithMySQLi()","{","return new MySQLi('localhost', 'root', '', 'mypizza');","}","}"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":14,"column":1},"end":{"row":15,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":["$"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"remove","lines":["$"]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":1},"end":{"row":4,"column":0},"action":"insert","lines":["",""]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]},{"start":{"row":4,"column":0},"end":{"row":4,"column":4},"action":"insert","lines":["    "]},{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"insert","lines":["    "]},{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "]},{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":5,"column":4},"end":{"row":5,"column":8},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":5,"column":0},"end":{"row":5,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":4,"column":8},"end":{"row":5,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":1,"column":5},"action":"remove","lines":["<?php"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"remove","lines":["y"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"remove","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"remove","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"remove","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"remove","lines":["F"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"remove","lines":["B"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"remove","lines":["D"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["B"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":57},"end":{"row":6,"column":58},"action":"remove","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":56},"end":{"row":6,"column":57},"action":"remove","lines":["z"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":55},"end":{"row":6,"column":56},"action":"remove","lines":["z"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":54},"end":{"row":6,"column":55},"action":"remove","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":53},"end":{"row":6,"column":54},"action":"remove","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":52},"end":{"row":6,"column":53},"action":"remove","lines":["y"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":51},"end":{"row":6,"column":52},"action":"remove","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":51},"end":{"row":6,"column":52},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":52},"end":{"row":6,"column":53},"action":"insert","lines":["9"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":60},"end":{"row":6,"column":61},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":59},"end":{"row":6,"column":60},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":58},"end":{"row":6,"column":59},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":57},"end":{"row":6,"column":58},"action":"remove","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":57},"end":{"row":6,"column":58},"action":"insert","lines":["j"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":58},"end":{"row":6,"column":59},"action":"insert","lines":["e"]},{"start":{"row":6,"column":59},"end":{"row":6,"column":60},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":60},"end":{"row":6,"column":61},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":61},"end":{"row":6,"column":62},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":6,"column":62},"end":{"row":6,"column":63},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":43},"end":{"row":12,"column":44},"action":"remove","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":42},"end":{"row":12,"column":43},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"remove","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"remove","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":40},"end":{"row":12,"column":41},"action":"insert","lines":["j"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":41},"end":{"row":12,"column":42},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":42},"end":{"row":12,"column":43},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":43},"end":{"row":12,"column":44},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":40},"end":{"row":12,"column":44},"action":"remove","lines":["jean"]},{"start":{"row":12,"column":40},"end":{"row":12,"column":46},"action":"insert","lines":["jeanar"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":60},"end":{"row":12,"column":61},"action":"remove","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":59},"end":{"row":12,"column":60},"action":"remove","lines":["z"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":58},"end":{"row":12,"column":59},"action":"remove","lines":["z"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":57},"end":{"row":12,"column":58},"action":"remove","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":56},"end":{"row":12,"column":57},"action":"remove","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":55},"end":{"row":12,"column":56},"action":"remove","lines":["y"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":54},"end":{"row":12,"column":55},"action":"remove","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":54},"end":{"row":12,"column":55},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":12,"column":55},"end":{"row":12,"column":56},"action":"insert","lines":["9"]}]}],[{"group":"doc","deltas":[{"start":{"row":15,"column":2},"end":{"row":16,"column":0},"action":"insert","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":0},"end":{"row":16,"column":39},"action":"insert","lines":["$manager = new PersonnagesManager($db);"]}]}],[{"group":"doc","deltas":[{"start":{"row":16,"column":0},"end":{"row":16,"column":39},"action":"remove","lines":["$manager = new PersonnagesManager($db);"]}]}],[{"group":"doc","deltas":[{"start":{"row":9,"column":9},"end":{"row":10,"column":0},"action":"insert","lines":["",""]},{"start":{"row":10,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":["        "]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":0},"end":{"row":17,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":24,"mode":"ace/mode/php"}},"timestamp":1422135573515}