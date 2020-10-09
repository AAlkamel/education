<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animation.css">
    <title>Document</title>
</head>
<body>
<div>
    <img src="media/Artboard 1.png" alt="">
</div>
<div id="audio">
    <audio id="a1" controls src="media/WhatsApp Audio 2020-08-24 at 12.55.56 PM.ogg"></audio>
</div>
<div class="lessonImage"> <img src="media/Artboard 2.png" alt=""></div>
<div id="prg0" >
    <pre>
    <?php
    $leeson ="التعاون -0:0- في يوم البيئة العالمي -0:1- طلب المعلم من تلاميذه المشاركة باقتراحات يحافظون بها على بيئة المدرسة -0:6- أخذ التلاميذ يفكرون ويتشاورون فيما بينهم -0:18- فقال فواز: -0:25- في المدرسة ساحة واسعة -0:27.7- لم لا مزرعها لتصبح حديقة؟ -0:31.5- رد حازم: -0:36-  الساحة واسعة ونحن صغار -0:38- فكيف يمكننا أن نزرعها ؟ -0:43- أجاب فواز: -0:47- لا تقلق يا حازم -0:49.3- فبالتعاون نجتاز الصعوبات ونحقق الغايات.-0:52- قال المعلم: -0:59- أحسنت يا فواز -1:1- فالتعاون خلق المسلم -1:4- وقد أمرنا الله تعالى به -1:7.3- في قوله تعالى: -1:11.5- {وَتَعَاوَنُوا عَلَى الْبِرِّ وَالتَّقْوَى وَلَا تَعَاوَنُوا عَلَى الْإِثْمِ وَالْعُدْوَانِ } [المائدة:2] -1:14.3- -1:23 ";
    $data  = explode("-",$leeson);
    $lines=[];
    $time =[];
    for ($i=0;$i<count($data);$i++){
        if($i%2==0) array_push($lines ,$data[$i]);
        else{
            $T=explode(":",$data[$i]);
            $data[$i]=floatval($T[1])+(floatval($T[0])*60);
            array_push($time ,$data[$i]);
        }
    }
    $json = json_encode($time);
       // print_r($lines);
       // print_r($time);

//       for ($i=0;$i<count($lines);$i++)(
//           if(i==0) echo '<a class=""  id="_1" onclick="setCurTime(' . $time[$i].')"></a>'
//       )
    ?>
    </pre>
    @for($i=0;$i<count($lines)-1;$i++)
        @if($i==0) <a class=""  id="_{{$i}}" onclick="setCurTime({{$time[$i]}})"><h2>{{$lines[$i]}}</h2></a>
             @else <a class=""  id="_{{$i}}" onclick="setCurTime({{$time[$i]}})">{{$lines[$i]}}</a>
        @endif
    @endfor

   </div>

<script src="js/JQuery.js"></script>
<script >
    var vid = document.getElementById("a1");
    var total= vid.duration.toString();

    function setCurTime(s) {
        vid.currentTime=s;
        vid.play();
    }

    window.onload = function() {


        let MyList= <?= $json ?> ;

        var i;
        var aClass;

        vid.ontimeupdate=function () {

            for(i=0;i<((MyList.length)-1);i++){
               let Class='_';
                   Class+=i;
                aClass=document.getElementById(Class);
                aClass.classList.remove("havere");
                if(parseFloat(MyList[i])<vid.currentTime&&vid.currentTime<parseFloat(MyList[i+1])){
                    console.log(Class);

                    aClass.classList.add("havere");
                }
            }
        }
    }
</script>
</body>
</html>
