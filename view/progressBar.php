<div class="progressbar">
    <div class="barSection">

    </div>
    <div class="barSection">

    </div>
    <div class="barSection">

    </div>
    <div class="barSection">

    </div>
    <div class="barSection">

    </div>
</div>

<style>
	/*
		Green:      #1FBE00
        Light grey: #c6c6c6
        Dark grey:  #5d5d5d

	*/
	.progressbar{
		margin: auto;
		position: relative;
		top: 0;
		width: 80%;
		display: flex;
		border-bottom-left-radius: 20px;
		border-bottom-right-radius: 20px;
		overflow: hidden;
		border: 3px solid #5d5d5d;
		border-top: 0;
	}
	.barSection{
		height: 20px;
		background-color: #c6c6c6;
		min-width: 1%;
		flex: 1;
		border-right: 1px solid #5d5d5d;

		transition: background-color 1s;
	}
    .barSection:last-child{
		border-right: 0;
	}
</style>
