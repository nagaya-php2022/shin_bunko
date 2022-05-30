<div id="toast" class="toast">
    <p>{{$noticeMsg}}</p>
</div>

<script>
    window.addEventListener("DOMContentLoaded", function() {
        document.querySelector('#toast').classList.add('showing');
        setTimeout(function() {
            document.querySelector('#toast').classList.remove('showing');
        }, 3000);
    });
</script>