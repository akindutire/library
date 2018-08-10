// JavaScript Document
$(function(){
	x=101;
	
	login=function(e){
		e.preventDefault();
		var pwd=$('#pwd').val(),
		usr=$('#usr').val(),
		url=$(this).closest('form').attr('action');
		$('#feedback').html('<center><img src="../images/r.gif" width="20px"></center>');
		$.post(url,{'usr':usr,'pwd':pwd},function(data){
			if(data==x){
				window.location=e.data.referer;
			}else{
				$('div #feedback').html(data);
				}
			});
		
		}
	
	addmember=function(e){
		e.preventDefault();
		var name=$('#name').val(),
		tel=$('#tel').val(),
		pwd=$('#pwd').val(),
		sex=$('#sex').val(),
		addr=$('#addr').val(),
		dpt=$('#dpt').val(),
		role=$('#role').val(),
		url=$(this).closest('form').attr('action');
		//alert(name);
		
		$('#feedback').html('<center><img src="../images/r.gif" width="20px">	Creating Account...</center>');
		$.post(url,{'role':role,'name':name,'tel':tel,'pwd':pwd,'sex':sex,'addr':addr,'dpt':dpt},function(data){
			
				$('#feedback').html(data);		
			});
		
		}
	
	memberpassport=function(event){
			event.preventDefault();
			var fdta=new FormData($('form:file')[0]);
			$.each($('#pfile')[0].files,function(i,file){
				fdta.append('file',file);
				});
				//fdta.serialize();
			
				$.ajax({
					url: '../process/uaskl.php',
           			type: 'POST',
            		data: fdta,
					contentType:false,
					processData:false,
					cache:false,
					beforeSend:function(evt){
						
							
								$('#feedback').html('<center><img src="../images/r.gif" width="20px"></center>');
								
						},
					error:function(){
						alert('An Error Occured, Try Again');
						},
            		success: function (data) {
						if(data==x){
							$('#feedback').empty().html('<b><img src="../images/r.gif" width="20px">&nbsp;<span style="color:green;">File Ready</span>:Waiting For Other Fields For Submission.</b>');
							
						}else{
							$('#feedback').html(data);
							}
					}
        			});
			}
			
	getsubclass=function(event){
		event.preventDefault();
		var cls=$('#class').val(),
		ac=$('#class').data('acr'),
		url='../process/getsubclass.php';
		$.post(url,{'ac':ac,'id':cls},function(data){
			$('#subclass select').html(data);
			});
		} 	
			
	adddoctolibrary=function(event){
        	
			var fdta=new FormData($('form:file')[0]);
			$.each($('#hfile')[0].files,function(i,file){
				fdta.append('hfile',file);
				});
			
				$.ajax({
					url: '../process/updf.php',
           			type: 'POST',
            		data: fdta,
					contentType:false,
					processData:false,
					cache:false,
					beforeSend:function(evt){
						
							
								$('#feedback').html('<center><img src="../images/r.gif" width="14px"></center>');
								
						},
					error:function(){
						alert('An Error Occured, Try Again');
						},
            		success: function (data) {
						if(data==x){
							$('#feedback').empty().html('<b><img src="../images/r.gif" width="14px">&nbsp;<span style="color:green;">Document Ready</span>:Waiting For Other Fields For Submission.</b>');
							
						}else{
							$('#feedback').html(data);
							}
                		
					}
        			});
		}
	
	additem=function(event){
		event.preventDefault();
		
		var title=$('#title').val(),
		isbn=$('#isbn').val(),
		author=$('#author').val(),
		pbyr=$('#pbyr').val(),
		pbby=$('#pbby').val(),
		cls=$('#class').val(),
		sbcls=$('#sbclass').val(),
		url=$(this).closest('form').attr('action');
		//alert(name);
		if(typeof(sbcls)=='undefined'){
			$('#feedback').html('<center><img src="../images/cancel.png" width="14px">	Cannot Proceed, No Subclass Defined!</center>');
			}else{
		$('#feedback').html('<center><img src="../images/r.gif" width="20px">	Adding To Library...</center>');
			$.post(url,{'title':title,'isbn':isbn,'author':author,'pbyr':pbyr,'pbby':pbby,'class':cls,'subclass':sbcls},function(data){
					$('#feedback').html(data);
					setTimeout(function(){
						window.location='addtolibrary.php';
						},5000);		
				});
			}
		}
	
	isearch=function(event){
		event.preventDefault();
		
		var flag=1;
		var sorter=$('#gsearch').val();
		var sx=$('#section').val();
		var url=$(this).closest('form').attr('action');

		$('#vlib table').html('<center><img src="../images/r.gif" width="20px">	Searching....</center>');
		
		$.post(url,{'searchid':flag,'section':sorter,'role':sx},function(data){
			//alert(data);
			$('#vlib table').html(data);
			
			});
		
		}
	addtocatalog=function(event){
		
		event.preventDefault();
		name=$('#classname').val();
		acr=$('#acr').val();
		
	 	url=$(this).closest('form').attr('action');

		$('#feedback').html('<center><img src="../images/r.gif" width="20px">	Adding To Catalog....</center>');
		
		$.post(url,{'classname':name,'acr':acr,'from':1},function(data){
			//alert(data);
			if(data==x){
				
				$('#right cc').html('<center><img src="../images/r.gif" width="20px">	Updating Catalog....</center>');
				
				$.post('../process/retrieve.php',{'retrieveid':1},function(data){
					$('#feedback').empty();
					$('#right cc').html(data);
					});
				}else{
					$('#feedback').html(data);
					}
			
			});

		}
		
	opensubclass=function(event){
		
		var classid=$(this).data('group');
		$('scc').css({visibility:'visible'}).slideToggle('fast');
		
		$('subclass').css({visibility:'visible'}).slideToggle('fast');
		$('#hiddensubfield').val(classid);
		
				$('#right scc').html('<center><img src="../images/r.gif" width="20px">	Updating Catalog....</center>');
				
				$.post('../process/retrieve.php',{'retrieveid':2,'clsid':classid},function(data){
					$('#feedback').empty();
					$('#right scc').html(data);
					});

		
		
		$('cc').css({display:'none'}).hide('fast');
		$('main').css({display:'none'}).hide('fast');
		
		
		
		//alert(classid);
		}
	
	addsubclass=function(){
		
		event.preventDefault();
		name=$('#sbclassname').val();
		acr=$('#sbacr').val();
		dcls=$('#hiddensubfield').val();
	 	url=$(this).closest('form').attr('action');
		//alert(dcls);
		$('#feedback').html('<center><img src="../images/r.gif" width="20px">	Adding To Catalog....</center>');
		
		$.post(url,{'sbclassname':name,'sbacr':acr,'dcls':dcls,'from':2},function(data){
			//alert(data);
			if(data==x){
				
				$('#right scc').html('<center><img src="../images/r.gif" width="20px">	Updating Catalog....</center>');
				
				$.post('../process/retrieve.php',{'retrieveid':2,'clsid':dcls},function(data){
					$('#feedback').empty();
					$('#right scc').html(data);
					});
				}else{
					$('#feedback').html(data);
					}
			
			});

		}

	shelf=function(event){
		event.preventDefault();	
		var cls=$('#class').val();
		var sbcls=$('#sbclass').val();
		var url=$(this).closest('form').attr('action');
	
		$('#right cc ul').html('<center><img src="../images/r.gif" width="20px">	Searching Catalog....</center>');
		$.post(url,{'retrieveid':3,'class':cls,'sbclass':sbcls},function(data){
			
			$('#right cc').html(data);

			});
		}
	removefromshelf=function(){
		
		bk=$(this).data('id');
		cls=$('#class').val();
		sbcls=$('#sbclass').val();
		
		url='../process/deleteitems.php';
		
		$.post(url,{'deleteid':1,'bk':bk},function(data){
			
			if(data==x){
				$.post('../process/retrieve.php',{'retrieveid':3,'class':cls,'sbclass':sbcls},function(data){
					
						$('#right cc').html(data);
					
					});
			}else{
				$('#feedback').html(data);
				}
			
		});
		}
	
	searchusingcallno=function(){
		var callno=$('#callno').val(),
		url='../process/search.php';
		
		
		$('#right cc').html('<center><img src="../images/r.gif" width="20px">	Searching Library....</center>');
		
		$.post(url,{'searchid':2,'callno':callno},function(data){
			
			$('#right cc').html(data);
			
			});
		
		}

	iborrow=function(){
		bk=$(this).data('idr');
		cls=$('#class').val();
		sbcls=$('#sbclass').val();
		//alert(bk);
		url='../process/borrow.php';
		
		$('#feedback').html('<center><img src="../images/r.gif" width="20px">&nbsp;Requesting...</center>');
		
		$.post(url,{'bkid':bk,'cls':cls,'sbcls':sbcls},function(data){
			
				if(data==x){
					$('#feedback').html('<img src="../images/accept.png" width="13px" height="auto">&nbsp;<small>Request Sent! Meet The Libarian, Request Will Be Declined In The Next 48hrs</small>');
					
				$.post('../process/retrieve.php',{'retrieveid':3,'class':cls,'sbclass':sbcls},function(data){
					
						$('#right cc').html(data);
					
					});
			}else{
				//alert(data);
				$('#feedback').html(data);
				}
			});
		
		}
	
	acceptrequest=function(){
		var id=$(this).data('prq');
		url='../process/request.php';
		

		
		$.post(url,{'rqtype':1,'pid':id},function(data){
			
			if(data==x){
				alert('Successfully Borrowed');
				
				$.post('../process/retrieve.php',{'retrieveid':4},function(data){
					
						$('table').html(data);
					
					});

				
			}else{
				alert(data);
				}
			
			});
		
		}


	declinerequest=function(){
		var id=$(this).data('drq');
		url='../process/request.php';
		
		$.post(url,{'rqtype':2,'pid':id},function(data){
			
			if(data==x){
				alert('Successfully Declined');
				
				$.post('../process/retrieve.php',{'retrieveid':4},function(data){
					
						$('table').html(data);
					
					});

				
			}else{
				alert(data);
				}
			
			});
		
		}

	returntolib=function(){
		
	var id=$(this).data('bk'),
		url='../process/request.php';
		
		
		
		$.post(url,{'rqtype':3,'ibk':id},function(data){
			
			if(data==x){
				alert('Success');
				
				$.post('../process/retrieve.php',{'retrieveid':5},function(data){
					
						$('table').html(data);
					
					});

				
			}else{
				alert(data);
				}
			
			});
		
		}


/************************End Function*************************************/


/* **********************|Binders|****************************************** */
	
	$('#sblogin').bind('click',{referer:'cpanel.php'},login);
	$('#addmem').bind('click',addmember);
	$('#pfile').bind('change',memberpassport);
	$('#class').bind('click change',getsubclass);
	$('#hfile').bind('change',adddoctolibrary);
	$('#additem').bind('click',additem);
	$('#gsearch').bind('keyup',isearch);
	$('#addclass').bind('click',addtocatalog);
	$('p > a').bind('click',opensubclass);
	$('#addsubclass').bind('click',addsubclass);
	$('#exploreshelf').bind('click submit',shelf);
	$('#right cc').on('click','a',removefromshelf);
	$('#callno').bind('keyup',searchusingcallno);
	$('#right cc').on('click','#bwbk',iborrow);
	$('#acprq').bind('click',acceptrequest);
	$('#dcrrq').bind('click',declinerequest);
	$('#delbr').bind('click',returntolib);
	
	
	
});