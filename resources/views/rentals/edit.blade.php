@extends("layouts.app")

@section("style")
<link rel="stylesheet" href="/css/common-style.css">
<link rel="stylesheet" href="/css/rental-style.css">
@endsection

@section('title')
返却
@endsection

@section("content")
<h1>返却</h1>

<form action="{{ route('rentals.return') }}" method="post">
    @csrf
    
    <div id="bookList" class="rental-rental_bookListContainer">
        
        <div class="rental-rental_newData">
            <label>
                資料ID <br>
                <input type="number">
            </label>
        </div>
    </div>
    
    <div class="rental-rental_Btns">
        <input type="submit" value="返却" class="orange-btn rental-rental_rentalBtn">
    </div>
</form>

@endsection

@section('script')
<script src="/js/libraries/axios.min.js"></script>
<script>
    const bookList = [];
    let bookIdInput;
    
    function clearBookList() {
        const listElement = document.querySelector('#bookList');
        listElement.innerHTML = '';
    }
    
    function rebulidBookList(list, error="") {
        const listElement = document.querySelector('#bookList');
        
        const bookInputElement = `<div class='rental-rental_newData'>\
            <label>\
                資料ID <br>\
                <input id='bookId' name='bookId' type='number'>\
                <div class='rental-rental_newData_error'>${error}</div>\
            </label>\
        </div>`;
        clearBookList();
        
        list.forEach((rental, index) => {
            const bookDataElement = `<div class='rental-rental_bookData'>\
                <div class='rental-rental_bookData_name'>${rental.name}</div>\
                <input type='hidden' name='rentalIds[]' value="${rental.id}">\
                <div class='bookId'>資料ID: ${rental.bookId}</div>\
                <button onclick='deleteBook(${index})' class='rental-rental_bookList_delete'></button>\
            </div>`;
            listElement.insertAdjacentHTML("beforeend", bookDataElement);
        });
        
        listElement.insertAdjacentHTML("beforeend", bookInputElement);
        document.querySelector('#bookId').addEventListener('keypress', getBookData);
    }
    
    function deleteBook(index) {
        bookList.splice(index, 1);
        rebulidBookList(bookList);
        document.querySelector('#bookId').select();
    }
    
    function getBookData(e) {
        // console.log("getBookData")
        if(e.keyCode !== 13) {
            return;
        }
        e.preventDefault();
        
        const bookId = document.querySelector('#bookId').value;
        
        if(bookId !== "") {
            axios.get(`/rental-data/${bookId}`)
            .then(res => {
                // console.log(res);
                console.log(res.data);
                if(res.data.ok) {
                    bookList.push(res.data.rental);
                    rebulidBookList(bookList);
                    document.querySelector('#bookId').select();
                } else {
                    rebulidBookList(bookList, res.data.error);
                    document.querySelector('#bookId').select();
                }
            });
        }
    }
    
    function getMemberData(e) {
        console.log("getBookData")
        if(e.keyCode !== 13) {
            return;
        }
        e.preventDefault();
        
        const memberId = document.querySelector('#memberId').value;
        if(memberId !== "") {
            axios.get(`/member-data/${memberId}`)
            .then(res => {
                // console.log(res);
                console.log(res.data);
                if(res.data.ok) {
                    document.querySelector('#memberName').innerText = res.data.name;
                    document.querySelector('#memberError').innerText = "";
                } else {
                    document.querySelector('#memberError').innerText = res.data.error;
                    document.querySelector('#memberName').innerText = "";
                }
            })
            .catch((e) => {
                console.log(e);
                document.querySelector('#memberError').innerText = "エラー";
                document.querySelector('#memberName').innerText = "";
            });
        }
    }
    
    function main() {
        rebulidBookList(bookList);
        document.querySelector('#bookId').addEventListener('keypress', getBookData);
        document.querySelector('#bookId').select();
        // document.querySelector('#memberId').addEventListener('keypress', getMemberData);
    }
    
    window.addEventListener("DOMContentLoaded", () => {
        main();
    })
    
    
</script>
@endsection