# v1.3.2
 - env 파일을 찾지 못하는 버그 수정

# v1.3.1
 - G5BoardFile가 use 되지 않은 버그 수정

# v1.3.0
 - AI가 적용된 테이블의 경우 primary key을 설정
 - G5Write의 생성 stub에 files 메소드를 추가
 - G5BoardFiles 모델과 릴레이션

# v1.2.1
 - G5Write에서 get relation value가 동작하지 않는 문제 해결

# v1.2.0
 - G5Board에서 생성된 개시판을 가져와 자동으로 모델링을 해주는 명령어 추가

# v1.1.0
 - G5Member primary key를 mb_id로 변경
 - G5Write 모델 추가없이 자동 릴레이션 기능 개선 (구라(ㅎ)에서 진짜로)

# v1.0.0
 - 커맨드 `g5model:make {table_name}`과 `g5model:write {board}`과 커맨드 추가
 - 커맨드 사용법 추가

# v0.2.1
 - G5Member Model `g5_write`로 시작하는 테이블 G5Write 자동 Relationship

# v0.2.0
 - Laravel relation 추가
 - Relation 사용방법 추가

# v0.1.0
 - G5ModelFactory class 추가
 - G5ModelFactory 사용방법 추가

# v0.0.2
 - 커스텀 모델 생성 방법 추가
 - timestamp 관리 위치 변경

# v0.0.1
 - GuLa 패키지 등록