window.addEventListener("DOMContentLoaded", () => {
  const scrollfromDetailed = document.querySelector('#detailed');
  const scrolltoTrainingtitle = document.querySelector('#trainingtitle');
  const scrollfromConsultation = document.querySelector('#consultation');
  const scrolltoSubscribtiontitle = document.querySelector('#subscribtiontitle');
  const subscribtionContent = document.querySelector('.subscribtion__content');
  const subscribtionSuccess = document.querySelector('.subscribtion__success');
  const subscribtionError = document.querySelector('.subscribtion__error');
  const form = document.getElementById('form');
  scrollfromDetailed.addEventListener('click', scrollToElement);
  function scrollToElement(e) {    
    e.preventDefault();
    scrolltoTrainingtitle.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  }
  scrollfromConsultation.addEventListener('click', scrollToElement);
  function scrollToElement(e) {    
    e.preventDefault();
    scrolltoSubscribtiontitle.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  }  
  form.addEventListener('submit', formSend);
    async function formSend(e) {
    e.preventDefault();

    let error = formValidateTel(form);
    let formData = new FormData(form) 
    if(error === 0){      
        let response = await fetch('./php/validform.php', {
          method: 'POST',
          body: formData
        });
        if(response.ok){      
          subscribtionContent.classList.add('none');
          subscribtionSuccess.classList.add('block');
        } else {
          subscribtionContent.classList.add('none');
          subscribtionError.classList.add('block');
        }
    } 
  }
  function formValidateTel(formTel) {
    let error = 0;
    let formReq = document.querySelectorAll('.req-tel');
    let tel = document.querySelector('.tel');
    if(nameTel(tel)){
        tel.parentElement.classList.add('error');
        tel.classList.add('error');
        error++;
        let msgTel = "Используйте пожалуйста только цифры, знаки + , - , и пробел!";            
        document.getElementById("msgTel").innerHTML = msgTel;
    }
    for(let index = 0; index < formReq.length; index++){
        const input = formReq[index];
        if(input.value === ''){         
          error++;
          let msgTel = "Заполните пожалуйста все поля!";
          document.getElementById("msgTel").innerHTML = msgTel;         
        } else if(input.classList.contains('name-tel')) {
          if(nameTest(input)){
              error++;
              let msgTel = "Не вводите пожалуйста в своем имени любые символы, кроме букв русского и латинского алфавита, знаков \" _ ! ? . , \", пробела и цифр!";            
              document.getElementById("msgTel").innerHTML = msgTel;
          }  
        } else {  
          if(input.classList.contains('email-tel')) {
              if(emailTest(input)){      
                error++;
                let msgTel = "Вы ввели не верный email";            
                document.getElementById("msgTel").innerHTML = msgTel;
              }
          }         
        }
    }
    return error;
  }
  function emailTest(input){
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
  }
  function nameTest(input){
    return /[^0-9a-zA-Zа-яёА-ЯЁ _?!.,]/u.test(input.value);
  }
  function nameTel(input){
      return /[^+?0-9 _-]$/.test(input.value);
  }
});