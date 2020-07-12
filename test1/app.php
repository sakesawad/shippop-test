<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col mt-3">
          <form>
            <div class="form-group row">
              <label for="listText" class="col-sm-2 col-form-label">List</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="listText" name="listText"
                  value="9,1,6,2,4,10,8,7,5,3">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputSearch" class="col-sm-2 col-form-label">ค้นหา</label>
              <div class="col-sm-7">
                <input type="number" min="0" class="form-control form-inline" id="inputSearch" name="inputSearch"
                  value="4">
              </div>
              <div class="col-sm-3">
                <a onClick="doSearch()" class="btn btn-warning">Search</a>
              </div>
            </div>
            <div class="form-group">
              <label for="searchType">ประเภทการค้นหา</label>
              <select class="form-control" id="searchType" name="searchType">
                <option value="1">Linear Search</option>
                <option value="2">Binary Search</option>
                <option value="3">Bubble Sort</option>
              </select>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label>ผลลัพธ์</label>
          <p id="resultWindow" class="text-center resultWindow p-3">
          </p>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
      function doSearch() {
        var searchType = document.getElementById('searchType').value;
        var listText = document.getElementById('listText').value;
        var inputSearch = document.getElementById('inputSearch').value;
        $.ajax({
          type:'POST',
          url:'backend.php',
          data:'searchType='+searchType+'&listText='+listText+'&inputSearch='+inputSearch,
          beforeSend: function () {
          },
          success:function(msg){
            $('#resultWindow').html(msg);
          }
        });
      }
  	</script>
  </body>
</html>
