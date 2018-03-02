<?php include 'header.php'; ?>

<div style="width: 100%;margin-top:30px;">
	<div class="row">
		<ul name="listCategory" id="listCategory" class="offset-md-2 col-md-2 bg-light"  ondrop="drop(event)" ondragover="allowDrop(event)">
				<li draggable="true" ondragstart="drag(event)" id="drag1">aaa</li>
				<li draggable="true" ondragstart="drag(event)" id="drag2">bbb</li>
				
		</ul>
		<div class="col-md-1">
			<button type="button" name='right'>>></button>
			<br><br>
			<button type="button" name='left'><<</button>
		</div>
		<ul name="listChoose" id="listChoose" class="col-md-2 bg-light" ondrop="drop(event)" ondragover="allowDrop(event)">
		</ul>

	</div>
	<script>
		function allowDrop(ev) {
		    ev.preventDefault();
		}

		function drag(ev) {
		    ev.dataTransfer.setData("text", ev.target.id);
		}

		function drop(ev) {
		    ev.preventDefault();
		    var data = ev.dataTransfer.getData("text");
		    ev.target.appendChild(document.getElementById(data));
		}
	</script>
</div>

<div class="myAjax">
	
</div>











































<?php include 'footer.php'; ?>

