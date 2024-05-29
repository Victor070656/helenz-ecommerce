<?php
session_unset();
session_destroy();

echo "<script>location.href='/'</script>";
