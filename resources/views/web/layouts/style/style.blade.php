<style>
:root {
  --primary : {{ setting('primary') }};
  --primary-opacity: {{ setting('secondary') }};
  --text: #555;
  --white: #fff;
  --black: #000;
  --red: rgb(255, 60, 0);
  --red-opacity: rgb(253, 212, 212);
  --orange: orange;
  --green: rgb(0, 143, 0);
  --gray: #eeeeee;
}
{{ setting('css') }}

.product-disable {
    position: relative
}

.product-disable:hover {
    border-color: var(--border);
    -webkit-box-shadow: none;
    box-shadow: none
}

.product-disable:hover .product-add {
    color: var(--heading);
    background: var(--border)
}

.product-disable .product-widget {
    visibility: hidden
}

.product-disable::before {
    position: absolute;
    content: "@lang('words.sold_out')";
    top: 40%;
    left: 50%;
    z-index: 2;
    width: 100%;
    font-size: 15px;
    font-weight: 400;
    padding: 15px 0px;
    text-align: center;
    text-shadow: var(--primary-tshadow);
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color: var(--white);
    background: var(--primary)
}
.product-disable::after {
    position: absolute;
    content: "";
    top: 0px;
    left: 0px;
    z-index: 1;
    width: 100%;
    height: 100%;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.6)
}
</style>
