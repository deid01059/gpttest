// chatGPT 질문
let btn = document.querySelector('#gptbtn');

btn.addEventListener('click', () => {
    let msg = document.querySelector('#question').value;
    console.log('시작');
    console.log(msg);

    let formData = new FormData;

    formData.append('question',document.querySelector('#question').value)
    fetch('/api/gpt', {
        method: 'POST',
        body: formData 
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        document.querySelector('#result').value = data.data;
    })
    .catch(err => {
        console.log(err);
    });
});
