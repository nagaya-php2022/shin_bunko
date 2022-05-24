@extends("layouts.app")

@section("style")
<link rel="stylesheet" href="/css/common-style.css">
<link rel="stylesheet" href="/css/rental-style.css">
@endsection

@section("content")
<h1>貸出</h1>
<dl></dl>

<div class="rental-rental_staffIdCard">
    <label>
        職員ID
        <input type="number" name="staffId" class="orange-input">
    </label>
</div>

<form action="{{ route('rentals.store') }}" method="post">
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
        <input type="submit" value="貸出" class="orange-btn rental-rental_rentalBtn">
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
    
    function htmlToElements(html) {
        var template = document.createElement('template');
        template.innerHTML = html;
        return template.content.childNodes;
    }
    
    function rebulidBookList(list, error) {
        const listElement = document.querySelector('#bookList');
        const bookInputElement = `<div class='rental-rental_newData'>\
            <label>\
                資料ID <br>\
                <input id='bookId' type='number'>\
                <div class='rental-rental_newData_error'>${error}</div>\
            </label>\
        </div>`;
        clearBookList();
        
        list.forEach((book, index) => {
            const bookDataElement = `<div class='rental-rental_bookData'>\
                <div class='rental-rental_bookData_name'>${book.detail.name}</div>\
                <div class='bookId'>12345678</div>\
                <div class='groupCode'>12345678</div>\
                <button onclick='deleteBook(${index})' class='rental-rental_bookList_delete'></button>\
            </div>`;
            listElement.insertAdjacentHTML("beforeend", bookDataElement);
        });
        
        listElement.insertAdjacentHTML("beforeend", bookInputElement);
        document.querySelector('#bookId').addEventListener('keypress', getBookData);
        document.querySelector('#bookId').select();
        console.log("event listener added")
    }
    
    function deleteBook(index) {
        bookList.splice(index, 1);
        rebulidBookList(bookList);
    }
    
    function getBookData(e) {
        // alert("getBookData")
        if(e === undefined || e.keyCode !== 13) {
            return;
        }
        e.preventDefault();
        console.log("getBookData")
        console.log(e.keyCode);
        
        const bookId = document.querySelector('#bookId').value;
        
        if(bookId !== "") {
            axios.get(`/book-data/${bookId}`)
            .then(res => {
                console.log(res.data);
                if(res.data.ok) {
                    bookList.push(res.data.book);
                    rebulidBookList(bookList);
                } else {
                    bookList.push(res.data.book);
                    rebulidBookList(bookList, res.data.error);
                }
            });
        }
    }
    
    function main() {
        const bookIdInput = 
        rebulidBookList([]);
        document.querySelector('#bookId').addEventListener('keypress', getBookData);
    }
    window.addEventListener("DOMContentLoaded", () => {
        main();
    })
    
    
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script> --}}
{{-- <script>
    const app = new Vue({
        el: "#app",
        data: {
            staffId: null,
            books: [],
        },
        methods: {},
        created: {},
    });
</script> --}}
@endsection