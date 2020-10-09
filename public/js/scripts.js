var vid = document.getElementById("a1");
var total= vid.duration.toString();

function setCurTime(s) {
  vid.currentTime=s;
  vid.play();
}

window.onload = function() {


    let MyList="<?php echo $time ?>" ;

  // var MyList=[
  // {
  //   "class":"_0",
  //   "text":" ",
  //   "time":"1"
  //
  // },
  // {
  //   "class":"_1",
  //   "text":" ",
  //   "time":"6"
  //
  // },
  // {
  //   "class":"_2",
  //   "text":" ",
  //   "time":"18"
  //
  // },
  // {
  //   "class":"_3",
  //   "text":" ",
  //   "time":"25"
  //
  // },
  // {
  //   "class":"_4",
  //   "text":" ",
  //   "time":"27.7"
  //
  // },
  // {
  //   "class":"_5",
  //   "text":" ",
  //   "time":"31.5"
  //
  // },
  // {
  //   "class":"_6",
  //   "text":" ",
  //   "time":"36"
  //
  // },
  // {
  //   "class":"_7",
  //   "text":" ",
  //   "time":"38"
  //
  // },
  // {
  //   "class":"_8",
  //   "text":" ",
  //   "time":"43"
  //
  // },
  // {
  //   "class":"_9",
  //   "text":" ",
  //   "time":"47"
  //
  // },
  // {
  //   "class":"_10",
  //   "text":" ",
  //   "time":"49.3"
  //
  // },
  // {
  //   "class":"_11",
  //   "text":" ",
  //   "time":"52"
  //
  // },
  // {
  //   "class":"_12",
  //   "text":" ",
  //   "time":"59"
  //
  // },
  // {
  //   "class":"_13",
  //   "text":" ",
  //   "time":"61"
  //
  // },
  // {
  //   "class":"_14",
  //   "text":" ",
  //   "time":"64"
  //
  // },
  // {
  //   "class":"_15",
  //   "text":" ",
  //   "time":"67.3"
  //
  // },
  // {
  //   "class":"_16",
  //   "text":" ",
  //   "time":"71.5"
  //
  // },
  // {
  //   "class":"_17",
  //   "text":" ",
  //   "time":"74.3"
  //
  // },
  // {
  //   "class":"_18",
  //   "text":" ",
  //   "time":"83"
  //
  // },
  //
  //
  // ];

  var i;
  var aClass;
  // vid.ontimeupdate=function () {
  //
  //   for(i=0;i<((MyList.length)-1);i++){
  //     aClass=document.getElementById(MyList[i].class);
  //     aClass.classList.remove("havere");
  //     if(parseFloat(MyList[i].time)<vid.currentTime&&vid.currentTime<parseFloat(MyList[i+1].time)){
  //       console.log(MyList[i].class);
  //
  //
  //       aClass.classList.add("havere");
  //     }
  //   };
  // }
    vid.ontimeupdate=function () {

        for(i=0;i<((MyList.length)-1);i++){
            aClass=document.getElementById(MyList[i].class);
            aClass.classList.remove("havere");
            if(parseFloat(MyList[i].time)<vid.currentTime&&vid.currentTime<parseFloat(MyList[i+1].time)){
                console.log(MyList[i].class);


                aClass.classList.add("havere");
            }
        };
    }
}
