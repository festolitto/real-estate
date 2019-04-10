 <script >
     
	 
	 
            
 
			 
			          $(document).ready(function(){
						 
						    $("#register").validate({
								rules:{
									refno:{
										  required:true,
										  minlength:7,
										  maxlength:8,
										  digits:true
								
									  },
									   
									  fname:{
										  required:true,
										  minlength:3,
										  maxlength:10
										  
									  },
									  lname:{
										  required:true,
										  minlength:3,
										  maxlength:10
									  },
									  id:{
										  required:true,
										  minlength:7,
										  maxlength:8,
										  digits:true
								
									  },
									    
									    phone:{
										  required:true,
										  minlength:10,
										  maxlength:14
										  
										  
								
									  },
									    uname:{
										  required:true,
										  email:true
								
									  },
									    pass:{
										  required:true,
										  minlength:8
										  
								
									  },
									    cpass:{
										  required:true,
										  minlength:8,
										  equalTo:password1
								
									  },
									
								},
								messages:{
									   cpassword:{
										   equalTo:"password Mismatch!"
										   },
										   
										   uname:{
											     email:"Enter valid Email"
											   }
                                       										   
								}
							});
						   
					  });
			 
			

   </script>
