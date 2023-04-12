
<!-- DAYS DATABASES (START) -->
<?php

$weekdays = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

$today = date('l');

?>
<!-- DAYS DATABASES (END) -->

<!-- STYLES ACCORDING to MOCKUP (START) -->

<style>
    body {
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    padding: 10px;
    background-color: rgb(229, 235, 233);
    align-items: center;
    display: flex;
    flex-direction: column;
    font-family: sans-serif;
}

.flex-container {
    display: flex;
    flex-wrap: nowrap;
    background-color: rgb(129, 132, 134);
}

h5 span {
    color: #5cb85c;
}

#selected{
    color: #0099ff;
}

.flex-container>div {
    background-color: #01b3fa;
    width: 100px;
    margin: 10px;
    text-align: center;
    line-height: 75px;
    font-size: 14px;
    color: aliceblue;
    cursor: pointer;
}

.selected {
    color: #fff;
    box-shadow: 0 0 5px #000;
    outline: 2px solid #fff;
}
</style>
<!-- STYLES ACCORDING to MOCKUP (END) -->

<!-- HTML CODE (START) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h5>Today is <span><?php echo $today ?><span></h5>

        <div class="flex-container">
            <!-- looping php  for displaying data from database -->
            <?php foreach ($weekdays as $days): ?>

            <!-- Is $days equals to $today? if TRUE add "selected in deep of class". Then run "selectedDay(this)" after click this div element -->
           <div class="days <?= ($days == $today) ? 'selected' : '' ?>" onclick="selectDay(this)">

           <!-- call the variable that contain array from database -->
				<?= $days ?>
			</div>
            <?php endforeach; ?>
        </div>
        <h5>Selected day is <span id="selected"><?= $today ?></span></h5>
    </div>

<!-- JAVASCRIPT CODE (START) -->
    <script>
        // create function with parameters "element"
		function selectDay(element) {
            //select class "days" from html code
			var days = document.querySelectorAll('.days');

            //looping for select all class "days"
			for (var i = 0; i < days.length; i++) {
				days[i].classList.remove('selected');
			}
            
            //add class "selected"
			element.classList.add('selected');

			var DaySelect = document.querySelector('#selected');
			DaySelect.textContent = element.textContent;
		}
	</script>
<!-- JAVASCRIPT CODE (END) -->    
</body>

</html>
<!-- HTML CODE (END) -->