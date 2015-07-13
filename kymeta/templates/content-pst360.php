<style type="text/css">
 	
 	 	
 	 	
 	#spritewrap{
 	
 	
 	
 	 	}
 	
 	
 	
div#main {
	
	
	
	 background-color:#fff;
     padding: 1em;
     -webkit-border-radius: 6px 6px 6px 6px;
     border-radius: 6px 6px 6px 6px;
    -webkit-box-shadow: inset 2px 2px 2px rgba(0,0,0,0.85);
     -moz-box-shadow: inset 2px 2px 2px rgba(0,0,0,0.85);
    box-shadow: inset 2px 2px 2px rgba(0,0,0,0.85);
    margin-bottom:20px;

	
}
 
	#textDemo{
		color:#212121;
		font-size:72px;
		padding-bottom:50px;
		padding-left:50px;
		padding-right:50px;
		padding-top:50px;
		text-shadow:1px 1px 0 #444444;
		width:3000px;
	}
	
	#DemoItem1, #DemoItem2, #DemoItem3{
		position: fixed;
		top: 370px;
		left: 50px;
		width: 200px;
		height: 50px;
		background: #1f1f1f;
		padding: 20px;
		color: #fff;
		border-top: 1px solid #444;
		border-left: 1px solid #444;
		border-right: 1px solid #111;
		border-bottom: 1px solid #111;
	}
	
	#DemoItem2{
		top: 270px;
	}
	#DemoItem3{
		top: 170px;
	}	
	
    #imgholder{
			width: 704px;
			height: 376px;
			position: absolute;
			background-image: url("http://www.kymetacorp.com/assets/pst_sprite.jpg");
	}
 
	#control{
			cursor: move;
			position: absolute;
			z-index: 1001;
			background: #000;
			opacity: 0;
			width: 704px;
			height: 376px;
			color: #fff;
	}
		
	#demoWrapper{
			margin: 50px auto 0px auto;
			width: 704px;
			height: 520px;
			position: relative;
			margin-bottom: 50px;
	}
		
	#controls{
			position: absolute;
			bottom: 0px;
			border-left: 1px solid #2a2a2a;
			height: 120px;
			
	}
	
	
select {
             width: auto;
}
  
  	.col{
  		padding-left: 25px;
  		height: 120px;
  		border-right: 1px solid #2a2a2a;
  		width: 208px;
  		float: left;
  	}
  	
  	#notice{
  	 	position: absolute;
		color:#2A2A2A;
				z-index: 10000;
		opacity: 0;
  	}
  	
  	.col span{
  		display: block;
  		margin-bottom: 10px;
		color:#2A2A2A;
				font-weight:normal;
		text-transform:uppercase;  	
  	}
  	
  	.col p{
  		width: 190px;
		color:#484848;
				line-height:18px;
		margin-bottom: 10px;
  	}
  	
	
</style>

<div class="row-fluid">
<div id="spritewrap">
	
				
		<div id="main">
			 
			<a class="bigbutton" title="PST 3D" href="/products/portable-satellite-terminal">« Back to PST</a>
			 
			<div id="demoWrapper">
			<div id="notice"></div> 
			<div id="imgholder">
			 
				<div id="control"></div>
			
			</div>
			
			<div id="controls">
 					
 				<div class="col">
 					<span>autoplay</span>
 					<p>Click the button below to autoplay:</p>
 					
 					<input id="autoplaybutton" type="checkbox" onclick="toggelPlay();"></input>
 				</div>	
 							
 				<div class="col">
 					<span>speed (1 - 10)</span>
 					<p>Select a speed between 1 and 10. 10 being fast and 1 being slow.</p>
 					<select id="speed" onchange="setSpeed(this.value);">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5" >5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					  <option value="10">10</option>
					</select>
 					
 					<!--<input type="input" onkeydown="setSpeed(this.value);" value="5"></input>-->
 				</div>	
 				
 				<div class="col">
 					<span>ticks</span>
 					<p>Ticks are the amount of pixels dragged across for the image to change.</p>
 					<select id="ticks" onchange="setTick(this.value);">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="5">5</option>
					  <option value="10">10</option>
					  <option value="20" >20</option>
					  <option value="25">25</option>
					  <option value="50">50</option>
					  <option value="75">75</option>
					  <option value="100">100</option>
					</select>
 					 
 				</div>		
  
			</div>
			
		</div>
		 
		</div>

	</div>
</div>
</div>
</div>



