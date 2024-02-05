<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/gpt.css">
    <title>Document</title>
</head>
<body>
    <form id="gptform">
        @csrf
        <label for="question">질문내용</label>
        <input type="text" name="question" id="question" class="que_input">
        <button type="button" id="gptbtn">질문하기</button>
    </form>
    <label for="result"></label>
    <textarea name="result" id="result" cols="30" rows="10" readonly></textarea>
    <script src="/js/gpt.js"></script>
</body>
</html>
