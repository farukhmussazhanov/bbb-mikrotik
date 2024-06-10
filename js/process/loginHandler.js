$("#login-form").on('submit',(e)=>{
    e.preventDefault();
    let formData = new FormData();
    let dataArray = $("#login-form").serializeArray(); // собираем данные формы в массив объектов
    // добавляем каждый элемент массива как пару ключ-значение в FormData
    $.each(dataArray, function(index, field){
        formData.append(field.name, field.value);
    });
    $.ajax({
        url: 'process/loginProcess.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        beforeSend: () => {
            $("#submit-btn").attr("disabled",true);
            $("#spinner").show();
            $("#btn-content").hide();
        },
        success: (response)=>{
            if(response.success !== undefined && response.success){
               location.replace("admin.php")
            }
            else{
                $("#error-msg").html("<b>Ошибка авторизации!</b><br>" + response.error);
                $("#error-msg").fadeIn();
                $("#spinner").hide();
                $("#btn-content").show();
                $("#submit-btn").removeAttr("disabled");
            }
        },
        error:(error)=>{
            console.error(error);
            $("#submit-btn").removeAttr("disabled");
        }
    });
})