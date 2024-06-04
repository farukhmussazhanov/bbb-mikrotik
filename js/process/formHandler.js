$("#data-submit").on('submit',(e)=>{
    e.preventDefault();
    let formData = new FormData();
    let dataArray = $("#data-submit").serializeArray(); // собираем данные формы в массив объектов
    console.log(dataArray);
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
        dataType: 'html',
        beforeSend: () => {
        },
        success: (response)=>{
            console.log(response);
        },
        error:(error)=>{

        }
    });
})