<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .visuallyhidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        body {
            font-family: 'system-ui', 'Open Sans', sans-serif;
            color: #1a1a1a;
            background-color: #f0f0f0;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            margin: 0;
            font-weight: 600;
        }

        .button {
            color: #ffffff;
            /* background-color: #24cf6093; */
            background-color: #7ae59f;
            padding: 12px 25px;
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 0;
            border-radius: 2px;
            outline: 0;
            box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.2);
            transition: all .2s;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            position: relative;
        }

        .br_or {
            margin-top: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 600;
            color: #555;
        }

        .button.btn_two {
            background-color: #c9c8c8;
            position: relative;
            text-decoration: none !important;
        }

        .button:hover,
        .button:active,
        .button:focus {
            -ms-transform: scale(1.1);
            transform: scale(1.1);
            z-index: 2;
        }

        .button--transparent {
            background: transparent;
            border: 0;
            outline: 0;
        }

        .button--close {
            position: absolute;
            top: 10px;
            left: 10px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            color: #ffffff;
            border-radius: 50%;
            transition: all .25s;
            z-index: 10;
        }

        .button--close svg {
            width: 20px;
            height: 20px;
        }

        .button--close svg * {
            fill: currentColor;
        }

        .button--close:hover,
        .button--close:active,
        .button--close:focus {
            color: #fbcf34;
            background-color: #ffffff;
            box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1);
        }

        .button--info {
            position: absolute;
            top: 0;
            right: 0;
        }

        form {
            margin-top: 7px;
        }

        input {
            width: calc(100% - 10px);
            min-height: 30px;
            padding-left: 5px;
            padding-right: 5px;
            letter-spacing: .5px;
            border: 0;
            border-bottom: 2px solid #f0f0f0;
        }

        /* input:valid {
            border-color: #24cf5f;
        } */

        input:focus {
            outline: none;
            border-color: #24cf6064;
        }

        .form-list {
            padding-left: 0;
            list-style: none;
        }

        .form-list__row {
            margin-bottom: 25px;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .form-list__row label,
        .br_or {
            position: relative;
            display: block;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 11px;
            letter-spacing: .5px;
            color: #939393;
            position: absolute;
            top: 10px;
            /* left: 7px; */
            transition: all ease-in-out 0.3s;
        }

        .title_form {
            color: #444;
            transform: translateY(-10px);
        }

        .form-list__row input:focus+label,
        .form-list__row input:not(:focus):valid+label {
            top: -12px;
            font-size: 8px;
            /* left: 0px; */
        }

        .form-list__row input {
            position: relative;
            z-index: 3;
            background-color: transparent;
        }

        .form-list__row--inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .form-list__row--inline> :first-child {
            -ms-flex: 2;
            flex: 2;
            padding-right: 20px;
        }

        .form-list__row--inline> :nth-child(2n) {
            -ms-flex: 1;
            flex: 1;
        }

        .form-list__input-inline {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .form-list__input-inline>* {
            width: calc(50% - 10px - 10px);
        }

        .form-list__row--agree {
            margin-top: 30px;
            margin-bottom: 30px;
            font-size: 12px;
        }

        .form-list__row--agree label {
            font-weight: 400;
            text-transform: none;
            color: #676767;
        }

        .form-list__row--agree input {
            width: auto;
            margin-right: 5px;
        }

        #input--cc {
            position: relative;
            padding-top: 6px;
        }

        #input--cc input {
            padding-left: 46px;
            width: calc(100% - 46px);
        }

        #input--cc:before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 36px;
            height: 45px;
            background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20glyph%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%20%3Cpath%20data-color%3D%22color-2%22%20fill%3D%22%238c8c8c%22%20d%3D%22M47%2C16V9c0-1.105-0.895-2-2-2H3C1.895%2C7%2C1%2C7.895%2C1%2C9v7H47z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%238c8c8c%22%20d%3D%22M1%2C22v17c0%2C1.105%2C0.895%2C2%2C2%2C2h42c1.105%2C0%2C2-0.895%2C2-2V22H1z%20M18%2C33H8c-0.552%2C0-1-0.448-1-1s0.448-1%2C1-1h10%20c0.552%2C0%2C1%2C0.448%2C1%2C1S18.552%2C33%2C18%2C33z%20M40%2C33h-5c-0.552%2C0-1-0.448-1-1s0.448-1%2C1-1h5c0.552%2C0%2C1%2C0.448%2C1%2C1S40.552%2C33%2C40%2C33z%22%3E%3C/path%3E%20%3C/g%3E%3C/svg%3E");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 36px;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        #input--cc.creditcard-icon--visa:before {
            background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Crect%20x%3D%221%22%20y%3D%2214%22%20fill%3D%22%23E6E6E6%22%20width%3D%2246%22%20height%3D%2219%22%3E%3C/rect%3E%20%3Cpath%20fill%3D%22%23E79800%22%20d%3D%22M4%2C41h40c1.657%2C0%2C3-1.343%2C3-3v-5H1v5C1%2C39.657%2C2.343%2C41%2C4%2C41z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v5h46v-5C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Cpolygon%20fill%3D%22%231A1876%22%20points%3D%2219.238%2C28.8%2021.847%2C28.8%2023.48%2C19.224%2020.87%2C19.224%20%22%3E%3C/polygon%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M28.743%2C23.069c-0.912-0.443-1.471-0.739-1.465-1.187c0-0.398%2C0.473-0.824%2C1.495-0.824%20c0.836-0.013%2C1.51%2C0.157%2C2.188%2C0.477l0.354-2.076c-0.517-0.194-1.327-0.402-2.339-0.402c-2.579%2C0-4.396%2C1.299-4.411%2C3.16%20c-0.015%2C1.376%2C1.297%2C2.144%2C2.287%2C2.602c1.016%2C0.469%2C1.358%2C0.769%2C1.353%2C1.188c-0.006%2C0.642-0.811%2C0.935-1.562%2C0.935%20c-1.158%2C0-1.742-0.179-2.793-0.655l-0.366%2C2.144c0.61%2C0.267%2C1.737%2C0.499%2C2.908%2C0.511c2.744%2C0%2C4.525-1.284%2C4.545-3.272%20C30.944%2C24.581%2C30.249%2C23.752%2C28.743%2C23.069z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M38.007%2C19.233H35.99c-0.625%2C0-1.092%2C0.171-1.367%2C0.794l-3.876%2C8.776h2.741c0%2C0%2C0.448-1.18%2C0.55-1.439%20c0.3%2C0%2C2.962%2C0.004%2C3.343%2C0.004c0.078%2C0.335%2C0.318%2C1.435%2C0.318%2C1.435h2.422L38.007%2C19.233z%20M34.789%2C25.406%20c0.108-0.276%2C1.173-3.011%2C1.386-3.591c0.353%2C1.651%2C0.009%2C0.049%2C0.781%2C3.591H34.789z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%231A1876%22%20d%3D%22M17.049%2C19.231l-2.556%2C6.53l-0.272-1.327l-0.915-4.401c-0.158-0.606-0.616-0.787-1.183-0.808H7.913%20L7.88%2C19.424c1.024%2C0.248%2C1.939%2C0.606%2C2.742%2C1.05l2.321%2C8.317l2.762-0.003l4.109-9.558H17.049z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
        }

        #input--cc.creditcard-icon--master-card:before {
            background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23003564%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h40c1.657%2C0%2C3-1.343%2C3-3V10C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Ccircle%20fill%3D%22%23F01524%22%20cx%3D%2219%22%20cy%3D%2224%22%20r%3D%228%22%3E%3C/circle%3E%20%3Cpath%20fill%3D%22%23376BD1%22%20d%3D%22M24%2C30.24c0.093-0.075%2C0.177-0.161%2C0.267-0.24h-0.535C23.823%2C30.079%2C23.907%2C30.165%2C24%2C30.24z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FEB415%22%20d%3D%22M29%2C16c-2.525%2C0-4.773%2C1.173-6.24%2C3h2.48c0.251%2C0.313%2C0.47%2C0.651%2C0.673%2C1h-3.827h-0.008%20c-0.186%2C0.321-0.352%2C0.653-0.492%2C1h0.009h4.809c0.132%2C0.324%2C0.246%2C0.656%2C0.335%2C1h-5.477c-0.084%2C0.326-0.151%2C0.659-0.193%2C1h5.865%20C26.975%2C23.328%2C27%2C23.661%2C27%2C24h-6c0%2C0.339%2C0.028%2C0.672%2C0.069%2C1h5.865c-0.043%2C0.341-0.111%2C0.674-0.195%2C1h-5.477%20c0.088%2C0.342%2C0.194%2C0.677%2C0.325%2C1h0.009h4.809c-0.141%2C0.346-0.305%2C0.68-0.491%2C1h-3.827h-0.008c0.203%2C0.351%2C0.429%2C0.686%2C0.681%2C1h2.48%20c-0.292%2C0.363-0.623%2C0.693-0.973%2C1h-0.535h-0.012c1.409%2C1.241%2C3.254%2C2%2C5.279%2C2c4.418%2C0%2C8-3.582%2C8-8S33.418%2C16%2C29%2C16z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
        }

        #input--cc.creditcard-icon--american-express:before {
            background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23007AC6%22%20d%3D%22M44%2C7H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h40c1.657%2C0%2C3-1.343%2C3-3V10C47%2C8.343%2C45.657%2C7%2C44%2C7z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FFFFFF%22%20d%3D%22M10.533%2C24.429h2.33l-1.165-2.857L10.533%2C24.429z%20M43%2C19h-5.969l-1.456%2C1.571L34.264%2C19H21.598l-1.165%2C2.571%20L19.268%2C19h-5.096v1.143L13.59%2C19H9.222L5%2C29h5.096l0.582-1.571h1.456L12.716%2C29h5.678v-1.143L18.831%2C29h2.912l0.437-1.286V29%20h11.648l1.456-1.571L36.594%2C29h5.969l-3.785-5L43%2C19z%20M25.383%2C27.571h-1.602V22l-2.475%2C5.571h-1.456L17.375%2C22v5.571h-3.349%20L13.444%2C26H9.95l-0.582%2C1.571H7.475l3.057-7.143h2.475l2.766%2C6.714v-6.714h2.766l2.184%2C4.857l2.038-4.857h2.766v7.143H25.383z%20M39.797%2C27.571h-2.184l-1.893-2.429l-2.184%2C2.429h-6.552v-7.143h6.697l2.038%2C2.286l2.184-2.286h2.038L36.739%2C24L39.797%2C27.571z%20M28.586%2C21.857v1.286h3.64v1.429h-3.64V26h4.077l1.893-2.143l-1.747-2H28.586z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
        }

        #input--cc.creditcard-icon--discover:before {
            background-image: url("data:image/svg+xml;utf8,%3Csvg%20class%3D%22nc-icon%20colored%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2248px%22%20height%3D%2248px%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%3E%3Cpath%20fill%3D%22%23E6E6E6%22%20d%3D%22M47%2C23.807V10c0-1.657-1.343-3-3-3H4c-1.657%2C0-3%2C1.343-3%2C3v28c0%2C1.657%2C1.343%2C3%2C3%2C3h10.589%20C30.229%2C38.811%2C43.003%2C30.094%2C47%2C23.807z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23E6E6E6%22%20d%3D%22M47%2C38V23.807C43.003%2C30.094%2C30.229%2C38.811%2C14.589%2C41H44C45.657%2C41%2C47%2C39.657%2C47%2C38z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FA7000%22%20d%3D%22M47%2C38V23.807C43.003%2C30.094%2C30.229%2C38.811%2C14.589%2C41H44C45.657%2C41%2C47%2C39.657%2C47%2C38z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23FA7000%22%20d%3D%22M25.029%2C21.013c-1.69%2C0-3.062%2C1.32-3.062%2C2.951c0%2C1.734%2C1.312%2C3.028%2C3.062%2C3.028%20c1.708%2C0%2C3.054-1.313%2C3.054-2.995C28.084%2C22.325%2C26.747%2C21.013%2C25.029%2C21.013z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M7.646%2C21.121H6v5.743h1.636c0.871%2C0%2C1.499-0.207%2C2.05-0.664c0.654-0.541%2C1.043-1.359%2C1.043-2.206%20C10.728%2C22.298%2C9.462%2C21.121%2C7.646%2C21.121z%20M8.956%2C25.434c-0.356%2C0.318-0.81%2C0.457-1.535%2C0.457H7.121v-3.798h0.301%20c0.725%2C0%2C1.161%2C0.13%2C1.535%2C0.464c0.385%2C0.345%2C0.617%2C0.878%2C0.617%2C1.429C9.573%2C24.539%2C9.342%2C25.091%2C8.956%2C25.434z%22%3E%3C/path%3E%20%3Crect%20x%3D%2211.245%22%20y%3D%2221.121%22%20fill%3D%22%23444444%22%20width%3D%221.116%22%20height%3D%225.743%22%3E%3C/rect%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M15.102%2C23.322c-0.674-0.247-0.871-0.412-0.871-0.722c0-0.361%2C0.352-0.635%2C0.836-0.635%20c0.335%2C0%2C0.612%2C0.134%2C0.906%2C0.462l0.583-0.764c-0.481-0.424-1.058-0.638-1.686-0.638c-1.016%2C0-1.791%2C0.707-1.791%2C1.642%20c0%2C0.794%2C0.36%2C1.197%2C1.411%2C1.579c0.439%2C0.153%2C0.662%2C0.257%2C0.776%2C0.328c0.224%2C0.145%2C0.335%2C0.352%2C0.335%2C0.592%20c0%2C0.467-0.37%2C0.811-0.871%2C0.811c-0.533%2C0-0.964-0.267-1.222-0.768l-0.722%2C0.7c0.516%2C0.756%2C1.135%2C1.094%2C1.988%2C1.094%20c1.163%2C0%2C1.982-0.778%2C1.982-1.887C16.757%2C24.202%2C16.377%2C23.788%2C15.102%2C23.322z%22%3E%3C/path%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M17.108%2C23.994c0%2C1.689%2C1.326%2C2.998%2C3.032%2C2.998c0.481%2C0%2C0.894-0.095%2C1.402-0.335v-1.32%20c-0.449%2C0.451-0.843%2C0.629-1.353%2C0.629c-1.128%2C0-1.927-0.816-1.927-1.98c0-1.1%2C0.825-1.972%2C1.877-1.972%20c0.531%2C0%2C0.937%2C0.188%2C1.402%2C0.646v-1.318c-0.491-0.248-0.894-0.351-1.379-0.351C18.467%2C20.991%2C17.108%2C22.325%2C17.108%2C23.994z%22%3E%3C/path%3E%20%3Cpolygon%20fill%3D%22%23444444%22%20points%3D%2230.617%2C24.977%2029.086%2C21.121%2027.864%2C21.121%2030.299%2C27.009%2030.9%2C27.009%2033.382%2C21.121%2032.17%2C21.121%20%22%3E%3C/polygon%3E%20%3Cpolygon%20fill%3D%22%23444444%22%20points%3D%2233.89%2C26.864%2037.066%2C26.864%2037.066%2C25.891%2035.011%2C25.891%2035.011%2C24.341%2036.988%2C24.341%2036.988%2C23.368%2035.011%2C23.368%2035.011%2C22.093%2037.066%2C22.093%2037.066%2C21.121%2033.89%2C21.121%20%22%3E%3C/polygon%3E%20%3Cpath%20fill%3D%22%23444444%22%20d%3D%22M41.5%2C22.815c0-1.076-0.738-1.695-2.031-1.695h-1.664v5.743h1.123v-2.309h0.146l1.547%2C2.309H42l-1.807-2.421%20C41.037%2C24.271%2C41.5%2C23.694%2C41.5%2C22.815z%20M39.254%2C23.762h-0.325v-1.737h0.343c0.7%2C0%2C1.075%2C0.294%2C1.075%2C0.853%20C40.347%2C23.452%2C39.972%2C23.762%2C39.254%2C23.762z%22%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
        }

        .app_input_file {
            margin-top: 35px;
            margin-bottom: 30px;
        }

        .form-list__row input[type=file] {
            visibility: hidden;
        }

        /*
        .form-list__row input[type=file]:valid + label {
            border-color: #24cf6064;
        } */

        .form-list__row input[type=file]:invalid + label {
            border-color: #f0f0f0;
        }

        label[for="upload_file"] {
            cursor: pointer;
            position: absolute;
            inset: 0;
            z-index: 4;
            border-radius: 35px;
            border: 2px dashed #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 11px !important;
        }

        .errors{
            order: 3;
        }

        .errors li {
            list-style: none;
            font-size: 10px;
            margin-top: 5px;
            color: #ffa9a9;
        }

        /* .errors + input{
            border-bottom-color: #ffa9a9;
        }

        .errors + input:valid {
            border-bottom-color: #f0f0f0;
        } */

        /* .form-list__row input[type=file]:focus + label[for="upload_file"]{
            border-color: #24cf6064;
        } */

        .modal {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            /* padding-top: 200px; */
            z-index: 100;
            overflow-y: auto;
        }

        .modal__container {
            display: -ms-flexbox;
            display: flex;
            /* max-width: 675px; */
            width: 600px;
            max-width: 80%;
            min-height: 400px;
            /* margin-bottom: 125px; */
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1);
            direction: ltr;
        }

        @media all and (max-width: 767px) {
            .modal__container {
                flex-direction: column;
            }
        }

        .modal__featured {
            position: relative;
            -ms-flex: 1;
            flex: 1;
            min-width: 230px;
            padding: 20px;
            overflow: hidden;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        @media all and (max-width: 767px) {
            .modal__featured {
                min-width: 100%;
                flex: auto;
                height: 200px;
                border-top-right-radius: 5px;
                border-bottom-left-radius: 0px;
            }
        }

        .modal__circle {
            position: absolute;
            top: 0;
            left: 0;
            height: 200%;
            width: 200%;
            background-color: #e6e6e6;
            border-radius: 50%;
            -ms-transform: translateX(-50%) translateY(-25%);
            transform: translateX(-50%) translateY(-25%);
            overflow: hidden;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            outline: 1px solid #e6e6e6;
        }

        @media all and (max-width: 767px) {
            .modal__circle {
                justify-content: center;
                align-items: flex-end;
                transform: translateX(-50%) translateY(-50%);
                left: 50%;
            }
        }

        .modal__product {
            /* position: absolute;
            top: 0;
            left: 50%; */
            /* max-width: 85%; */
            /* -ms-transform: translateX(calc(-50% - 10px)); */
            /* transform: translateX(calc(-50%)); */
            height: 50%;
            width: 50%;
            max-width: 300px;
            object-fit: cover
        }

        .modal__content {
            -ms-flex: 3;
            flex: 3;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        body[dir=rtl] .modal__content{
            direction: rtl;
        }
    </style>
</head>

<body dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <section>
        <div class="modal">
            <div class="modal__container">
                <div class="modal__featured">
                    <div class="modal__circle">
                        <img src="{{ asset('admin/dist/img/man.jpg') }}" class="modal__product _img" />
                    </div>
                </div>
                <div class="modal__content">
                    <h2 class="title_form">{{ __('Register') }}</h2>

                    <form method="POST" action="{{ route('register') }}" class="myform" enctype="multipart/form-data">
                        @csrf
                        <ul class="form-list">
                            <!-- Name -->
                            <li class="form-list__row">
                                <x-text-input id="name" class="form-control" placeholder="" type="text"
                                    name="name" :value="old('name')" required autofocus />
                                <label>{{ __('Name') }}</label>
                                <x-input-error :messages="$errors->get('name')" class="errors" />
                            </li>

                            <!-- Email Address -->
                            <li class="form-list__row">
                                <x-text-input id="email" class="form-control" placeholder="" type="text"
                                    name="email" :value="old('email')" required />
                                <label>{{ __('Email') }}</label>
                                <x-input-error :messages="$errors->get('email')" class="errors" />
                            </li>

                            <!-- Password -->
                            <li class="form-list__row">
                                <x-text-input id="password" class="form-control" placeholder="" type="password"
                                    name="password" required autocomplete="new-password" />
                                <label>{{ __('Password') }}</label>
                                <x-input-error :messages="$errors->get('password')" class="errors" />
                            </li>

                            <!-- Confirm Password -->
                            <li class="form-list__row">
                                <x-text-input id="password_confirmation" class="form-control" placeholder=""
                                    type="password" name="password_confirmation" required />
                                <label>{{__('Confirm Password')}}</label>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="errors" />
                            </li>

                            <!-- image -->
                            <li class="form-list__row app_input_file">
                                <input type="file" id="upload_file" onchange="showPrev(event, this)" value=""
                                    class="custom-file-input" name="image">
                                <label for="upload_file">{{ __('Select A New Photo') }}</label>
                                <script>
                                    function showPrev(event , input) {
                                        event.target.files.length > 0 ? document.querySelector('._img').src = URL.createObjectURL(event.target
                                            .files[0]) : '';
                                            input.nextElementSibling.style.borderColor = '#24cf6064'
                                            input.nextElementSibling.style.color = '#24cf6064'
                                            // input.nextSibling.style.borderColor = '#24cf6064'
                                    }
                                </script>
                                <x-input-error :messages="$errors->get('image')" class="errors" />
                            </li>

                            <li>
                                <x-primary-button class="button"><small><i
                                            class="far fa-user pr-2"></i>{{ __('Register') }}</small>
                                </x-primary-button>
                                <a class="button btn_two" href="{{ route('login') }}">
                                    <small><i class="far fa-user pr-2"></i>{{ __('Already registered?') }}</small>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div> <!-- END: .modal__content -->
            </div> <!-- END: .modal__container -->
        </div> <!-- END: .modal -->
    </section>

</body>

</html>
