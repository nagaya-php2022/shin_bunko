<div id="confirm-mask" class="confirm-hidden">
    <div class="confirm-container">
        <button onclick="closeConfirmation()" class="confirm-closeBtn"></button>
        
        <p>
        このデータを削除します
        </p>
        
        <div class="confirm-buttons">
        <button class="clickable btn confirm-calcelBtn" onclick="closeConfirmation()">キャンセル</button>
        <button class="clickable confirm-deleteBtn" onclick="execDeletion()">削除</button>
        </div>
    </div>
</div>

<script>
    function confirmDeletion(e) {
        console.log("confirmDeletion")
        document.querySelector('#confirm-mask').classList.remove("confirm-hidden")
        return false;
    }

    function closeConfirmation() {
        console.log("closeConfirmation")
        console.log(document.querySelector('#confirm-mask'))
        document.querySelector('#confirm-mask').classList.add("confirm-hidden")
    }

    function execDeletion() {
        document.querySelector('#{{ $formId }}').submit();
    }
</script>