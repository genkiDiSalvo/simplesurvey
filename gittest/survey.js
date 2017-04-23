$(function(){
    var form1=document.getElementById("form1");
    form1.addEventListener("submit", check_count, false);

});
function check_count(e){

    var checker=true;
    if($(':text[name="name"]').val()===""){
        checker=false;
    }

    if($('input[name="gender"]:checked').length===0){
        checker=false;
    }
    if($('select[name="birth_year"]').val()===""){
        checker=false;
    }
    if($("select[name='birth_month']").val()===""){
        checker=false;
    }
    if($("select[name='birth_day']").val()===""){
        checker=false;
    }

    if(checker){
        $('#form1').submit();

    }
    else{
        alert("全ての項目に回答してください");
        e.preventDefault();
    }
}
