///////////////////////////////////////
// チェックボックス用のJavaScript
///////////////////////////////////////

$(function() {
    const Checked = document.getElementsByClassName('checked');
    const CheckedText = document.getElementsByClassName('checked-text');
    const checkboxMulti = document.getElementsByName('todo-check');
    
    for(let i = 0; i < checkboxMulti.length; i++){
      checkboxMulti[i].addEventListener('change',function(){
        let checkId = Checked[i].getAttribute('id')
        if(this.checked) {
            Checked[i].dataset.name = checkId;
            CheckedText[i].classList.add("done");;
        } else{
            Checked[i].dataset.name = '';
            CheckedText[i].classList.remove("done");
        } 
      });
    }
  });