Let's Encrypt

개요
・HTTPS를 보급시키는 것을 목적으로한 프로젝트.
・SSL/TLS증명서를 발급하는 인증기관(CA:Certification Authority)
・증명서를 무료로 발급

어떻게 무료로 서버증명서를 발행가능한가?
・스폰서 (https://letsencrypt.org/sponsors/)
・기부
・증명서의 발행을 자동화

Let's Encrypt의 마일드스톤
・2014.11 - Let's Encrypt발표
・2015.12 - 퍼블릭 베타 서비스 시작
・2016.04 - 정식 서비스 시작
・2017.06 - 증명서 발행이 1억개에 도달한 것을 발표
・2017.07 - 2018년도부터 와일드카드증명서 발행예정을 발표

발행된 증명서의 특징(1)
・개인이 증명서 발급가능.
・주요 브라우저 문제없이 이용가능.
・미국 IdenTrust사의 루트증명서를 크로스루트하고 있음.
・증명서의 종류는 DV(Domain Validation)증명서.
・습득한 SSL증명서의 유효기간은 90일간.

발행된 증명서의 특징(2)
・서버 증명서의 종류
 ・EV증명서
  ・Extended Validation
  ・굉장히 엄격한 조사기준(EV Governance)으로 발행되는 증명서
  ・기업 확인
  ・담당자 확인
 
 ・OV증명서
  ・Organization Validation
  ・기업을 위해 발행되는 증명서
  ・기업 확인
 
 ・DV증명서
  ・Domain Validation
  ・도메인의 소유자에게 발행되는 증명서
  ・도메인 보유 확인이 목적
  
Let's Encrypt가 발행하는 DV증명서
・도메인의 보유여부를 확인.
・도메인을 보유하고 있는 사람만이 
 할 수 있는 조작을 요구해서 증명하는 것으로
 도메인의 보유여부를 증명.
 ・일반적인 방법
  ・DNS에 지정된 TXT레코드를 추가
  ・지정한 파일을 위치시킴

Let's Encrypt의 구조
・자동화된 증명서 발행 프로세스
 ・증명서 신청
 ・도메인 보유여부 확인
 ・증명서 발행 
→ 이 프로세스를 표준화
→ ACME (Automated Certificate Management Environment) 프로토콜
  
