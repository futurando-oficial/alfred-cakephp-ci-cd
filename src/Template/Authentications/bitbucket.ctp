<script>
    if (window.location.hash) {
        window.location = window.location.href.replace("#", "?");
    } else {
        window.location = '<?= $this->Url->build(['action' => 'add']) ?>';
    }
</script>