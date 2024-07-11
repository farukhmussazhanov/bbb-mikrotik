$("#data-submit").on('submit',(e)=>{
    e.preventDefault();
    let formData = new FormData();
    let dataArray = $("#data-submit").serializeArray(); // собираем данные формы в массив объектов
    // добавляем каждый элемент массива как пару ключ-значение в FormData
    $.each(dataArray, function(index, field){
        formData.append(field.name, field.value);
    });
    $.ajax({
        url: 'process/storeDataProcess.php',
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
                alert("OK")
            }
            else{
                alert("not ok")
            }
        },
        error:(error)=>{
            console.error(error);
            $("#submit-btn").removeAttr("disabled");
        }
    });
})