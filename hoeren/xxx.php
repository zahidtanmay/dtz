var q1 = <?php echo(json_encode($_POST['q1'])); ?>;
              var q2 = <?php echo(json_encode($_POST['q2'])); ?>;
              var q3 = <?php echo(json_encode($_POST['q3'])); ?>;
              var q4 = <?php echo(json_encode($_POST['q4'])); ?>;

              if(q1==3){
                qs1 = 1;
              }else {
                qs1 = 0;
              }
              if(q2==3){
                qs2 = 1;
              }else {
                qs2 = 0;
              }
              if(q3==3){
                qs3 = 1;
              }else {
                qs3 = 0;
              }
              if(q4==3){
                qs4 = 1;
              }else {
                qs4 = 0;
              }
              var s1 = qs1 + qs2 + qs3 + qs4;









function scoreShow(){
  var session = <?php echo(json_encode($page_session)); ?>;
  if(session == 1){
  document.getElementById("s1").style.display="block";
  document.getElementById("s1").textContent = <?php echo(json_encode($_SESSION['q1'])); ?> ;
}
else if(session == 2){
document.getElementById("s2").style.display="block";
}else if(session == 3){
document.getElementById("s3").style.display="block";
document.getElementById("s3").textContent = <?php echo(json_encode($_SESSION['s3'])); ?>;
}else if(session == 4){
document.getElementById("s4").style.display="block";
}else if(session == 5){
document.getElementById("s5").style.display="block";
}else if(session == 6){
document.getElementById("s6").style.display="block";
}else if(session == 7){
document.getElementById("s7").style.display="block";
}else if(session == 8){
document.getElementById("s8").style.display="block";
}else if(session == 9){
document.getElementById("s9").style.display="block";
}
}



$.ajax({
          type: 'GET',
          success: function(res) {
            console.log(res);
            alert(res);


            var session = <?php echo(json_encode($page_session)); ?>;

            if(session == 1){
              document.getElementById("s1").style.display="block";
              document.getElementById("s1").textContent = <?php echo(json_encode($_SESSION['q1'])); ?> ;
            }
            else if(session == 2){
              document.getElementById("s2").style.display="block";
            }else if(session == 3){
              document.getElementById("s3").style.display="block";
              document.getElementById("s3").textContent = <?php echo(json_encode($_SESSION['s3'])); ?>;
            }else if(session == 4){
              document.getElementById("s4").style.display="block";
            }else if(session == 5){
              document.getElementById("s5").style.display="block";
            }else if(session == 6){
              document.getElementById("s6").style.display="block";
            }else if(session == 7){
              document.getElementById("s7").style.display="block";
            }else if(session == 8){
              document.getElementById("s8").style.display="block";
            }else if(session == 9){
              document.getElementById("s9").style.display="block";
            }