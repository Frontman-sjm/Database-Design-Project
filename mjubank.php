<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="mjubank.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>

<body>
  <header class="header">
    <div>
      <span>MJU BANK DB SYSTEM</span>
    </div>
  </header>

  <div class="mid_Nav">
    <div class="wrapper">
      <span class="Nav_1" id="Nav_1">MJU Bank DB System > 조회 > 고객조회</span>
      <span class="Nav_2" id="Nav_2">MJU Bank DB System > 조회 > 예금조회</span>
      <span class="Nav_3" id="Nav_3">MJU Bank DB System > 조회 > 카드조회</span>
      <span class="Nav_4" id="Nav_4">MJU Bank DB System > 조회 > 거래내역조회</span>
      <span class="Nav_5" id="Nav_5">MJU Bank DB System > 등록 > 고객등록</span>
      <span class="Nav_6" id="Nav_6">MJU Bank DB System > 등록 > 예금등록</span>
      <span class="Nav_7" id="Nav_7">MJU Bank DB System > 등록 > 카드등록</span>
      <span class="Nav_8" id="Nav_8">MJU Bank DB System > 입/출금 > 입금</span>
      <span class="Nav_9" id="Nav_9">MJU Bank DB System > 입/출금 > 출금</span>
      <span class="Nav_10" id="Nav_10">MJU Bank DB System > 입/출금 > 계좌이체</span>
    </div>
  </div>

  <div class="wrapper">
    <section class="left_Nav">
      <div>
        <span>
          조회
        </span>
      </div>
      <div class="sub_menu">

        <div class="span_wrap" class="span1" id="span1">
          <div>
            <span>
              - 고객조회
            </span>
          </div>
        </div>

        <div class="span_wrap" class="span2" id="span2">
          <div>
            <span>
              - 예금조회
            </span>
          </div>
        </div>

        <div class="span_wrap" id="span3">
          <div>
            <span>
              - 카드조회
            </span>
          </div>
        </div>

        <div class="span_wrap" id="span4">
          <div>
            <span>
              - 거래내역조회
            </span>
          </div>
        </div>
      </div>

      <div>
        <span>
          등록
        </span>
      </div>
      <div class="sub_menu">

        <div class="span_wrap" id="span5">
          <div>
            <span>
              - 고객등록
            </span>
          </div>
        </div>

        <div class="span_wrap" id="span6">
          <div>
            <span>
              - 예금등록
            </span>
          </div>
        </div>

        <div class="span_wrap" id="span7">
          <div>
            <span>
              - 카드등록
            </span>
          </div>
        </div>

      </div>

      <div>
        <span>
          입/출금
        </span>
      </div>
      <div class="sub_menu">
        <div class="span_wrap" id="span8">
          <div>
            <span>
              - 입금
            </span>
          </div>
        </div>

        <div class="span_wrap" id="span9">
          <div>
            <span>
              - 출금
            </span>
          </div>
        </div>

        <div class="span_wrap" id="span10">
          <div>
            <span>
              - 계좌이체
            </span>
          </div>
        </div>

      </div>
    </section>


    <section class="right_Section">
      <div class="Num1" id="Num1">
        <p class="title">
          고객조회
        </p>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">
              <table id="table1" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>이름</th>
                <th>주소</th>
                <th>생년월일</th>
                <th>이메일</th>
                <th>전화번호</th>
                <th>직업</th>
                <th>주민번호</th>
                </tr>
              </thead>
              <tbody></tbody>
              </table>
            </div>
            </div>
          </div>
      </div>
      <div class="Num2" id="Num2">
        <p class="title">
          예금조회
        </p>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">
              <table id="table2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>예금계좌번호</th>
                  <th>예금계좌종류</th>
                  <th>예금잔고</th>
                  <th>키드신청여부</th>
                  <th>예금개설일자</th>
                  <th>이름</th>
                  <th>전화번호</th>
                  <th>이메일</th>
                  <th>주민번호</th>
                </tr>
              </thead>
              <tbody></tbody>
              </table>
            </div>
            </div>
          </div>

      </div>
      <div class="Num3" id="Num3">
        <p class="title">
          카드조회
        </p>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">
              <table id="table3" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>카드번호</th>
                <th>한도금액</th>
                <th>결제일자</th>
                <th>신청일자</th>
                <th>카드종류</th>
                <th>주민번호</th>
                <th>예금계좌번호</th>
                </tr>
              </thead>
              <tbody></tbody>
              </table>
            </div>
            </div>
          </div>
      </div>

      <div class="Num4" id="Num4">
        <p class="title">
          거래내역조회
        </p>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">
              <table id="table4" class="table table-bordered table-striped" style="width=100%;">
              <thead>
                <tr>
                  <th>예금계좌번호</th>
                  <th>입출금날짜</th>
                  <th>거래번호</th>
                  <th>예금구분</th>
                  <th>예금내용</th>
                  <th>거래금액</th>
                  <th>예금잔고</th>
                </tr>
              </thead>
              <tbody></tbody>
              </table>
            </div>
            </div>
          </div>
      </div>
      <div class="Num5" id="Num5">
        <p class="title">
          고객등록
        </p>
        <form method="post" action="client_register.php">
          <div class="form-group">
            <label for="exampleInputEmail1">이름</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="이름을 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">주소</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="주소를 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">생년월일</label>
            <input type="text" name="birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="생년월일을 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">이메일</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="이메일을 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">전화번호</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="' - '없이 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">직업</label>
            <input type="text" name="job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="직업을 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">주민번호</label>
            <input type="text" name="cnum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="' - '없이 입력해주세요." required>
          </div>
          <button type="submit" class="btn btn-primary">제출</button>
        </form>
      </div>

      <div class="Num6" id="Num6">
        <p class="title">
          예금등록
        </p>
        <form method="post" action="account_register.php">
        <!--
          <div class="form-group">
            <label for="exampleInputEmail1">예금계좌번호</label>
            <input type="text" name="anum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="예금계좌번호를 입력해주세요." required>
          </div> -->
          <div class="form-group">
            <label for="exampleInputEmail1">예금계좌종류</label>
            <input type="text" name="atype" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="예금계좌종류를 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">카드신청여부</label>
            <select class="form-control" name="card">
              <option>신청</option>
              <option>미신청</option>
            </select>
          </div>
          <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label" style="margin-left : 15px;">예금개설일자</label>
            <div class="col-10">
              <input class="form-control" name="odate" type="date"  id="example-date-input" style="margin-left : 15px;" required>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" style="margin-left:30px;">주민번호</label>
            <input type="text" name="cnum" class="form-control" id="exampleInputEmail1" style="margin-left:30px;" aria-describedby="emailHelp" placeholder="' - '없이 입력해주세요." required>
          </div>
          <button type="submit" class="btn btn-primary">제출</button>
        </form>
      </div>

      <div class="Num7" id="Num7">
        <p class="title">
          카드등록
        </p>
        <form method="post" action="card_register.php">
        <div class="form-group">
            <label for="exampleInputEmail1">카드종류</label>
            <select class="form-control" name="ctype" id="card_choice" onchange="somefunction($(this).val())">
              <option value="1">신용카드</option>
              <option value="0">체크카드</option>
            </select>
          </div>
          <div class="form-group remove">
            <label for="exampleInputEmail1">한도금액</label>
            <input type="text" name="max" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="한도금액을 입력해주세요.">
          </div>
          <div class="form-group remove">
            <label for="exampleInputEmail1">결제일자</label>
            <input type="text" name="payday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="결제일자를 입력해주세요.">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">예금계좌번호</label>
            <input type="text" name="anum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="예금계좌번호를 입력해주세요." required>
          </div>
          <div class="form-group row">
            <label for="example-date-input" class="col-2 col-form-label" style="margin-left : 15px;">신청일자</label>
            <div class="col-10">
              <input class="form-control" name="regday" type="date"  id="example-date-input" style="margin-left : 15px;" required> 
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" style="margin-left : 30px">주민번호</label>
            <input type="text" name="cnum" style="margin-left : 30px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="' - '없이 입력해주세요." required>
          </div>
          <button type="submit" class="btn btn-primary">제출</button>
        </form>
      </div>

      <div class="Num8" id="Num8">
        <p class="title">
          입금
        </p>
        <form method="post" action="deposit_register.php">
          <div class="form-group">
            <label for="exampleInputEmail1">계좌번호</label>
            <input type="text" name="anum" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ' - ' 포함하지않고 계좌번호를 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">입금 금액</label>
            <input type="text" name="deposit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="입금 금액을 입력해주세요." required>
          </div>
          <button type="submit" class="btn btn-primary">제출</button>
        </form>
      </div>

      <div class="Num9" id="Num9">
        <p class="title">
          출금
        </p>
        <form method="post" action="withdraw_register.php">
          <div class="form-group">
            <label for="exampleInputEmail1">계좌번호</label>
            <input type="text" name='anum' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ' - ' 포함하지않고 계좌번호를 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">출금 금액</label>
            <input type="text" name='withdraw' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="출금 금액을 입력해주세요." required>
          </div>
          <button type="submit" class="btn btn-primary">제출</button>
        </form>
      </div>

      <div class="Num10" id="Num10">
        <p class="title">
          계좌이체
        </p>
        <form method="post" action="wd_register.php">
          <div class="form-group">
            <label for="exampleInputEmail1">출금 계좌번호</label>
            <input type="text" name='withdraw' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ' - ' 포함하지않고 계좌번호를 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">입금 계좌번호</label>
            <input type="text" name='deposit' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="이체 금액을 입력해주세요." required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">송금 금액</label>
            <input type="text" name='transfer' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="이체 금액을 입력해주세요." required> 
          </div>
          <button type="submit" class="btn btn-primary">제출</button>
        </form>
      </div>


    </section>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  <script type="text/javascript">
        $("#span1").click(function() {
      $('#Num1').css('display', 'block');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'block');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'none');
    });

    $("#span2").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'block');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'block');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'none');
    });

    $("#span3").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'block');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'block');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'none');
    });

    $("#span4").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'block');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'block');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'none');
    });

    $("#span5").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'block');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'block');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'none');
    });

    $("#span6").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'block');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'block');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'none');
    });

    $("#span7").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'block');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'block');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'none');
    });

    $("#span8").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'block');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'block');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'none');
    });

    $("#span9").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'block');
      $('#Num10').css('display', 'none');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'block');
      $('#Nav_10').css('display', 'none');
    });

    $("#span10").click(function() {
      $('#Num1').css('display', 'none');
      $('#Num2').css('display', 'none');
      $('#Num3').css('display', 'none');
      $('#Num4').css('display', 'none');
      $('#Num5').css('display', 'none');
      $('#Num6').css('display', 'none');
      $('#Num7').css('display', 'none');
      $('#Num8').css('display', 'none');
      $('#Num9').css('display', 'none');
      $('#Num10').css('display', 'block');

      $('#Nav_1').css('display', 'none');
      $('#Nav_2').css('display', 'none');
      $('#Nav_3').css('display', 'none');
      $('#Nav_4').css('display', 'none');
      $('#Nav_5').css('display', 'none');
      $('#Nav_6').css('display', 'none');
      $('#Nav_7').css('display', 'none');
      $('#Nav_8').css('display', 'none');
      $('#Nav_9').css('display', 'none');
      $('#Nav_10').css('display', 'block');
    });

    function somefunction(value){
      if(value == 0){
        $('.remove').css('display', 'none');
      }
      if(value == 1){
        $('.remove').css("display","block");
      }
    }

  </script>
  <script type="text/javascript">
      $(document).ready(function(){

      var dataTable = $('#table1').DataTable({
      "processing" : true,
      "serverSide" : true,
      "order" : [],
      "ajax" : {
        url:"client_fetch.php",
        type:"POST"
      }
      });

      $('#table1').on('draw.dt', function(){
      $('#table1').Tabledit({
        url:'client_action.php',
        dataType:'json',
        columns:{ 
        identifier : [6, 'client_id'],
        editable:[[0, 'name'], [1, 'address'], [3, 'email'], [4, 'phone'], [5, 'job']]
        },
        restoreButton:false,
        onSuccess:function(data, textStatus, jqXHR)
        {
        if(data.action == 'delete')
        {
          $('#' + data.id).remove();
          $('#table1').DataTable().ajax.reload();
        }
        }
      });
      });

      });
  </script>

  <script type="text/javascript">
      $(document).ready(function(){

      var dataTable = $('#table2').DataTable({
      "processing" : true,
      "serverSide" : true,
      "order" : [],
      "ajax" : {
        url:"account_fetch.php",    
        type:"POST"
      }
      });

      $('#table2').on('draw.dt', function(){
      $('#table2').Tabledit({
        url:'account_action.php',   
        dataType:'json',
        columns:{
        identifier : [0, 'account_id'],
        editable:[[3, 'card_apply']]
        },
        restoreButton:false,
        onSuccess:function(data, textStatus, jqXHR)
        {
        if(data.action == 'delete')
        {
          $('#' + data.id).remove();
          $('#table2').DataTable().ajax.reload();
        }
        }
      });
      });

      });
  </script>
  <script type="text/javascript">
      $(document).ready(function(){

      var dataTable = $('#table3').DataTable({
      "processing" : true,
      "serverSide" : true,
      "order" : [],
      "ajax" : {
        url:"card_fetch.php",
        type:"POST"
      }
      });

      $('#table3').on('draw.dt', function(){
      $('#table3').Tabledit({
        url:'card_action.php',
        dataType:'json',
        columns:{
        identifier : [0, 'card_id'],
        editable:[[1, 'max'], [2, 'payday']]
        },
        restoreButton:false,
        onSuccess:function(data, textStatus, jqXHR)
        {
        if(data.action == 'delete')
        {
          $('#' + data.id).remove();
          $('#table3').DataTable().ajax.reload();
        }
        }
      });
      });

      });
  </script>
  <script type="text/javascript">
      $(document).ready(function(){

      var dataTable = $('#table4').DataTable({
      "processing" : true,
      "serverSide" : true,
      "order" : [],
      "ajax" : {
        url:"transaction_fetch.php",
        type:"POST"
      }
      });

      $('#table4').on('draw.dt', function(){
      $('#table4').Tabledit({
        url:'transaction_action.php',
        dataType:'json',
        columns:{
        identifier : [0, 'account_id'],
        editable:[[1, 'trans_date'], [2, 'trans_id'],[3, 'trans_type'], [4, 'trans_contents '], [5, 'trans_price'], [6, 'balance']]
        },
        restoreButton:false,
        onSuccess:function(data, textStatus, jqXHR)
        {
      
        if(data.action == 'delete')
        {
          $('#' + data.id).remove();
          $('#table4').DataTable().ajax.reload();
        }
        }
      });
      });

      });
  </script>
</body>

</html>
