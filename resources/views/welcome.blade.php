<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Education Board Bangladesh</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/syle.css">

	<link rel="shortcut icon" type="image/x-icon" href="assets/images/bd_logo.png">
</head>
<body>



    {{-- Login Table --}}
	

	<div class="wraper">
		<div class="w-top">
			<div class="logo">
				<img src="assets/images/bd_logo.png" alt="">
			</div>
			<div class="banner">
				<h3>Ministry of Education</h3>
				<hr>
				<h4>Intermediate and Secondary Education Boards Bangladesh</h4>
			</div>
		</div>
		<div class="w-main">
			<div class="search-result">
				<form id="result_check_form" action="" method="POST" enctype="multipart/form-data">
					@csrf
					<table>
					<tr>
						<td>Examination</td>
						<td>
							<select name="exam">
	                            <option value="hsc">HSC/Alim/Equivalent</option>
	                            <option value="jsc">JSC/JDC</option>
	                            <option value="ssc">SSC/Dakhil</option>
								<option value="ssc_voc">SSC(Vocational)</option>
	                            <option value="hsc">HSC/Alim</option>
								<option value="hsc_voc">HSC(Vocational)</option>
								<option value="hsc_hbm">HSC(BM)</option>
								<option value="hsc_dic">Diploma in Commerce</option>
								<option value="hsc">Diploma in Business Studies</option>
                          	</select>
						</td>
					</tr>
					<tr>
						<td>Year</td>
						<td>
							<select name="year">
                            <option value="" selected>Select One</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                          </select>
						</td>
					</tr>
					<tr>
						<td>Board</td>
						<td>
						 	<select name="board">
		                          <option value=""selected>Select One</option>
								  <option value="barisal">Barisal</option>
								  <option value="chittagong">Chittagong</option>
								  <option value="comilla">Comilla</option>
		                          <option value="dhaka">Dhaka</option>
								  <option value="dinajpur">Dinajpur</option>
								  <option value="jessore">Jessore</option>
		                          <option value="rajshahi">Rajshahi</option>
		                          <option value="sylhet">Sylhet</option>
		                          <option value="madrasah">Madrasah</option>
								  <option value="tec">Technical</option>
								  <option value="dibs">DIBS(Dhaka)</option>
                          	</select>
						</td>
					</tr>
					<tr>
						<td> Roll</td>
						<td><input name="roll" type="text"></td>
					</tr>
					<tr>
						<td> Reg: No</td>
						<td><input name="regi" type="text"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="reset" value="reset"><input type="submit" value="submit"></td>
					</tr>
				</table>
				</form>
                
			</div>
            <a id="add_result_btn" class="btn btn-info btn-sm text-center d-table m-auto" href="#">Result Add</a>
            <br>
		</div>
		<div class="w-footer">
			<div class="f-left">
				<p>©2005-2019 Ministry of Education, All rights reserved. </p>
			</div>
			<div class="f-right">
				<span> Powered by </span>
				<img src="assets/images/tbl_logo.png" alt="">
			</div>
		</div>
	</div>
	<div class="bottom">
		<img src="assets/images/play.png" alt="">
	</div>




    {{-- Add Result Modal --}}

    <div id="add_result_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
    
                    <h3 class="m-auto d-block">Student's Result Add</h3>
    
                </div>
    
                <div class="modal-body">

                    <form action="" id="add_result_form" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Name">
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input name="roll" type="text" class="form-control" placeholder="Roll No">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<input name="regi" type="text" class="form-control" placeholder="Regi No">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<input name="inst" type="text" class="form-control" placeholder="Institute">
								</div>
							</div>

						</div>

						
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input name="bangla" type="text" class="form-control" placeholder="Bangla">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<input name="english" type="text" class="form-control" placeholder="English">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<input name="math" type="text" class="form-control" placeholder="Math">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<input name="bgpa" type="text" class="form-control" placeholder="GPA">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<input name="egpa" type="text" class="form-control" placeholder="GPA">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<input name="mgpa" type="text" class="form-control" placeholder="GPA">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<select name="exam">
										<option value="">Exam</option>
										<option value="hsc">HSC/Alim</option>
										<option value="jsc">JSC/JDC</option>
										<option value="ssc">SSC/Dakhil</option>
										<option value="ssc_voc">SSC(Voca)</option>
										<option value="hsc_voc">HSC(Voca)</option>
										<option value="hsc_hbm">HSC(BM)</option>
										<option value="hsc_dic">Diploma</option>
									  </select>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<select name="board">
										<option value=""selected>Board</option>
										<option value="barisal">Barisal</option>
										<option value="chittagong">Chittagong</option>
										<option value="comilla">Comilla</option>
										<option value="dhaka">Dhaka</option>
										<option value="dinajpur">Dinajpur</option>
										<option value="jessore">Jessore</option>
										<option value="rajshahi">Rajshahi</option>
										<option value="sylhet">Sylhet</option>
										<option value="madrasah">Madrasah</option>
										<option value="tec">Technical</option>
										<option value="dibs">DIBS(Dhaka)</option>
									</select>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<select name="year">
										<option value="" selected>year</option>
										<option value="2019">2019</option>
										<option value="2018">2018</option>
										<option value="2017">2017</option>
										<option value="2016">2016</option>
										<option value="2015">2015</option>
										<option value="2014">2014</option>
										<option value="2013">2013</option>
										<option value="2012">2012</option>
										<option value="2011">2011</option>
										<option value="2010">2010</option>
										<option value="2009">2009</option>
										<option value="2008">2008</option>
										<option value="2007">2007</option>
										<option value="2006">2006</option>
										<option value="2005">2005</option>
										<option value="2004">2004</option>
										<option value="2003">2003</option>
										<option value="2002">2002</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
									  </select>
								</div>
							</div>
						</div>



						<div class="form-group">
							<input type="file" class="form-control-file" name="photo">
						</div>

						<div class="form-group d-block text-center">
							<input type="submit" class="btn btn-info w-100" value="Add">
						</div>

                    </form>
    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>






    {{-- Result Modal --}}

    <div id="" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
    
                    
    
                </div>
    
                <div class="modal-body">

    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>



	    {{-- Basic Modal --}}

		<div id="" class="modal fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
		
					<div class="modal-header">
		
						
		
					</div>
		
					<div class="modal-body">
	
		
					</div>
		
					<div></div>
		
				</div>
			</div>
		</div>



    <script src="assets/js/jquery-3.2.1.min.js"></script>    

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/custom.js"></script>


    
</body>
</html>