

function add_Student(){
    var f_name = document.getElementById("stdfname").value;
    var l_name = document.getElementById("stdlname").value;
    var father_name = document.getElementById("stdfathname").value;
    var mobile = document.getElementById("stdmblnumber").value;
    var country = document.getElementById("stdcountry").value;
    var city = document.getElementById("stdcity").value;

    // alert(f_name);
    // alert(l_name);
    // alert(father_name);
    // alert(mobile);
    // alert(country);
    // alert(city);
    
    if(f_name != "" && l_name != "" && father_name != "" && mobile != "" && country != "" && city != ""){
var obj ={
    first_name : f_name,
    last_name : l_name,
    fatherName: father_name,
    Mobile : mobile,
    CountryName : country,
    CityName : city
}
$.post( "serverSide/addstd.php", JSON.stringify(obj), function( response ) {
    //window.location = 'serverSide/addstd.php'
    if( response == "ok"){
         window.location = 'studentTable.php'
    }
    else{
        alert("Erroe==>Something Went Wrong")
    }
})
    }
   else{
       alert("please Field All Input Is Correctly")
   }
    }


    function add_teacher(){
        // alert("techerForm")
        var f_name = document.getElementById("teacherfname").value;
        var l_name = document.getElementById("teacherlname").value;
        var father_name = document.getElementById("teacherfathname").value;
        var mobile = document.getElementById("teachermblnumber").value;
        var country = document.getElementById("teachercountry").value;
        var city = document.getElementById("teachercity").value;
    
        // alert(f_name);
        // alert(l_name);
        // alert(father_name);
        // alert(mobile);
        // alert(country);
        // alert(city);
        
        if(f_name != "" && l_name != "" && father_name != "" && mobile != "" && country != "" && city != ""){
    var obj ={
        first_name : f_name,
        last_name : l_name,
        fatherName: father_name,
        Mobile : mobile,
        CountryName : country,
        CityName : city
    }
    $.post( "serverSide/addteacher.php", JSON.stringify(obj), function( response ) {
        if( response == "ok"){
            window.location = 'teacherTable.php'
       }
       else{
           alert("Erroe==>Something Went Wrong")
       }
    })
        }
       else{
           alert("please Field All Input Is Correctly")
       }
    }