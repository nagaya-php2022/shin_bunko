<div id="toast" class="toast showing">
    <p>貸出完了</p>
</div>

<script>
    const urlParams = new URLSearchParams(window.location.search);
    if(urlParams.get("show_notice") == "1") {
        window.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.querySelector('#toast').classList.remove('showing');
            }, 3000);
        });
    }
</script>