<?php  include('header.php')?>
    
<!--- test comment --->
                              <form action="insert_data.php" method="post" enctype="multipart/form-data">
			    					<div >
			               student_name: <input type="text" name="name"  placeholder="First Name">
			    					</div>
			    				<div>
			    					father's_name:	<input type="text" name="fathername" placeholder="Last Name">
			    					</div>
			    			
			    						<div>
			    					email_id:	<input type="email" name="email"  placeholder="email_id">
			    					</div>
			    			        <div >
			    					password:	<input type="password" name="password"  placeholder="Password">
			    					</div>
                                    <div >
			    				phone_number:	<input type="number" name="number" placeholder="phone_number">
			    					</div>
                                    <div >
			    				address:	<input type="text" name="address"  placeholder="address">
			    					</div>
                                    <div>
                                        hindi: <input type="checkbox" value="hindi" name="ajay[]"> 
                                        english: <input type="checkbox" value="english" name="ajay[]"> 
                                        maths: <input type="checkbox" value="maths" name="ajay[]"> 
                                        science: <input type="checkbox" value="science" name="ajay[]"> 
                                        physics: <input type="checkbox" value="physics" name="ajay[]"> 
                                        chemistry: <input type="checkbox" value="chemistry" name="ajay[]"> 
                                    </div>
                                    <div >
			    					gender:	<input type="radio" value="male" name="radio">male
                                    <input type="radio" value="female" name="radio">fimale
                                    <input type="radio" value="other" name="radio">other
			    					</div>
                                 time:   <input type="time"  name="time">
                                   
                              <div>select_city  <select  name="list">
			    				 <option value="lucknow" name="choose">lucknow </option>
                             <option value="delhi">delhi</option>
                              <option vlaue="kanpur">kanpur</option>
                                <option value="noida">jnoida</option>
                                 </select></div>
                              <div>your_opinion <textarea rows = "3" placeholder = "Player Details" name="write"></textarea></div>
                              choose_your_file  <input type="file" name="banner"   />
 <input type="submit" value="Register" name="register" >
                           </form>	
			    	



                           <?php  include('footer.php')?>
