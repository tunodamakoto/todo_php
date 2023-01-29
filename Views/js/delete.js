///////////////////////////////////////
// ToDo削除用のJavaScript
///////////////////////////////////////

$(function() {
    $('.todo-delete').click(function() {
        const checkboxMulti = document.getElementsByName('todo-check');
        const targetCount = checkboxMulti.length;
        let value = [];
        for (let i = 0; i < targetCount; i++) {
            value.push(checkboxMulti[i].getAttribute('data-name'));
        }
        let data = value.filter(Boolean);
        let parent = [];
        const parentCount = data.length;
        for(let i = 0; i < parentCount; i++) {
            parent.push(checkboxMulti[i].parentElement)
        }
        cache: false
        if(data) {
            $.ajax({
                url: 'delete-todo.php',
                type: 'POST',
                data: {'data_id': data},
                timeout: 10000,
                dataType : 'text'
            })
                // 送信成功
                .done(() => {
                    parent.forEach(function( value ) {
                        value.remove();
                   });
                })
                .fail((data) => {
                    alert('処理中にエラーが発生しました。');
                    console.log(data);
                });
        }
    });
})