<?php
/**
 * @Author: Marte
 * @Date:   2017-08-29 20:11:17
 * @Last Modified by:   Marte
 * @Last Modified time: 2017-08-29 20:21:00
 */
$callback=$_GET['callback'];
$arrayName = '{
    "pubdate": "2017-08-29",
    "pubtime": "11:00:00",
    "time": 1503991271,
    "area": [
        ["\u5317\u4eac", "01"],
        ["\u5317\u4eac", "0101"],
        ["\u5317\u4eac", "101010100"]
    ],
    "weather": [{
        "date": "2017-08-29",
        "info": {
            "day": ["1", "\u591a\u4e91", "26", "\u5357\u98ce", "3-4 \u7ea7"],
            "night": ["0", "\u6674", "16", "\u897f\u5357\u98ce", "3-4 \u7ea7"]
        }
    }, {
        "date": "2017-08-30",
        "info": {
            "dawn": ["0", "\u6674", "16", "\u897f\u5357\u98ce", "3-4 \u7ea7"],
            "day": ["1", "\u591a\u4e91", "27", "\u897f\u5357\u98ce", "\u5fae\u98ce"],
            "night": ["1", "\u591a\u4e91", "18", "\u5357\u98ce", "\u5fae\u98ce"]
        }
    }, {
        "date": "2017-08-31",
        "info": {
            "dawn": ["1", "\u591a\u4e91", "18", "\u5357\u98ce", "\u5fae\u98ce"],
            "day": ["2", "\u9634", "26", "\u5317\u98ce", "\u5fae\u98ce"],
            "night": ["2", "\u9634", "18", "\u4e1c\u98ce", "\u5fae\u98ce"]
        }
    }, {
        "date": "2017-09-01",
        "info": {
            "dawn": ["2", "\u9634", "18", "\u4e1c\u98ce", "\u5fae\u98ce"],
            "day": ["1", "\u591a\u4e91", "27", "\u897f\u5357\u98ce", "\u5fae\u98ce"],
            "night": ["1", "\u591a\u4e91", "19", "\u5357\u98ce", "\u5fae\u98ce"]
        }
    }, {
        "date": "2017-09-02",
        "info": {
            "dawn": ["1", "\u591a\u4e91", "19", "\u5357\u98ce", "\u5fae\u98ce"],
            "day": ["7", "\u5c0f\u96e8", "25", "\u897f\u5357\u98ce", "\u5fae\u98ce"],
            "night": ["7", "\u5c0f\u96e8", "18", "\u5357\u98ce", "\u5fae\u98ce"]
        }
    }],
    "pm25": {
        "area": ["\u5317\u4eac", "101010100"],
        "pm25": [44, "2017082914"]
    }
}';
echo $callback."(".$arrayName.")";

// echo $callback."(".json_encode($arrayName).")";