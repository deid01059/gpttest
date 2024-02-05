## 기본셋팅
1. https://platform.openai.com/docs/overview 로 들어가서 API keys 클릭
2. Create new secret key 클릭후 Create secret key를 통해 나의 key생성
3. env에 OPENAI_API_KEY="나의 key"값 추가
4. composer require guzzlehttp/guzzle 로 HTTP 클라이언트를 설치

## 동작원리
1.유저가입력한 값을 gpt에게 전달 url(https://api.openai.com/v1/chat/completions)
2.리턴온 값을 셋팅

## 에러발생
### 카드등록 안해서 사용량 초과 에러가 뜨는대 이제는 카드등록으로만이 아닌 기본 5$결제해야하는거같아서 실사용은 패스..

## 결과
1. 결제를 해야해서 체험은 실패.. 하지만 다른 글들을 읽어봐도 코드자체에서큰문제는 보이지않으니 문제없을것 같긴하다