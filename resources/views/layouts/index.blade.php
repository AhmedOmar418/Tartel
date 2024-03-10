<!DOCTYPE html>
<html lang="ar">
<head>
    <title>أكاديمية الاحسان</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Webestica.com">
    <meta name="description" content="Eduport- LMS, Education and Course Theme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('logo.jpg')}}">

    <!-- Google Font -->
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/css/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/overlay-scrollbar/css/OverlayScrollbars.min.css')}}">

    <!-- Theme CSS -->
    <link id="style-switch" rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

    <style>
        @charset "UTF-8";
        /*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
        :root {
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-gray-100: #f8f9fa;
            --bs-gray-200: #e9ecef;
            --bs-gray-300: #dee2e6;
            --bs-gray-400: #ced4da;
            --bs-gray-500: #adb5bd;
            --bs-gray-600: #6c757d;
            --bs-gray-700: #495057;
            --bs-gray-800: #343a40;
            --bs-gray-900: #212529;
            --bs-primary: #066ac9;
            --bs-white: #fff;
            --bs-secondary: #9a9ea4;
            --bs-success: #0cbc87;
            --bs-info: #17a2b8;
            --bs-warning: #f7c32e;
            --bs-danger: #d6293e;
            --bs-light: #f5f7f9;
            --bs-dark: #24292d;
            --bs-orange: #fd7e14;
            --bs-purple: #6f42c1;
            --bs-blue: #1d3b53;
            --bs-primary-rgb: 6, 106, 201;
            --bs-white-rgb: 255, 255, 255;
            --bs-secondary-rgb: 154, 158, 164;
            --bs-success-rgb: 12, 188, 135;
            --bs-info-rgb: 23, 162, 184;
            --bs-warning-rgb: 247, 195, 46;
            --bs-danger-rgb: 214, 41, 62;
            --bs-light-rgb: 245, 247, 249;
            --bs-dark-rgb: 36, 41, 45;
            --bs-orange-rgb: 253, 126, 20;
            --bs-purple-rgb: 111, 66, 193;
            --bs-blue-rgb: 29, 59, 83;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-body-color-rgb: 116, 117, 121;
            --bs-body-bg-rgb: 255, 255, 255;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --bs-body-font-family: Roboto, sans-serif;
            --bs-body-font-size: 0.9375rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #747579;
            --bs-body-bg: #fff;
        }

        *,
        *::before,
        *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        @media (prefers-reduced-motion: no-preference) {
            :root {
                scroll-behavior: smooth;
            }
        }

        body {
            margin: 0;
            font-family: "Almarai", sans-serif;
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        hr {
            margin: 1rem 0;
            color: #9a9ea4;
            background-color: currentColor;
            border: 0;
            opacity: 0.25;
        }

        hr:not([size]) {
            height: 1px;
        }

        h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
            margin-top: 0;
            margin-bottom: 0.5rem;
            font-family: "Heebo", sans-serif;
            font-weight: 700;
            line-height: 1.25;
            color: #24292d;
        }

        h1, .h1 {
            font-size: calc(1.40625rem + 1.875vw);
            font-family: "Almarai", sans-serif;
        }
        @media (min-width: 1200px) {
            h1, .h1 {
                font-size: 2.8125rem;
                font-family: "Almarai", sans-serif;
            }
        }

        h2, .h2 {
            font-size: calc(1.359375rem + 1.3125vw);
            font-family: "Almarai", sans-serif;
        }
        @media (min-width: 1200px) {
            h2, .h2 {
                font-size: 2.34375rem;
            }
        }

        h3, .h3 {
            font-size: calc(1.3125rem + 0.75vw);
            font-family: "Almarai", sans-serif;
        }
        @media (min-width: 1200px) {
            h3, .h3 {
                font-size: 1.875rem;
            }
        }

        h4, .h4 {
            font-size: calc(1.2890625rem + 0.46875vw);
            font-family: "Almarai", sans-serif;
        }
        @media (min-width: 1200px) {
            h4, .h4 {
                font-size: 1.640625rem;
            }
        }

        h5, .h5 {
            font-size: calc(1.25625rem + 0.075vw);
            font-family: "Almarai", sans-serif;
        }
        @media (min-width: 1200px) {
            h5, .h5 {
                font-size: 1.3125rem;
                font-family: "Almarai", sans-serif;
            }
        }

        h6, .h6 {
            font-size: 0.9375rem;
            font-family: "Almarai", sans-serif;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
            font-family: "Almarai", sans-serif;
        }

        abbr[title],
        abbr[data-bs-original-title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none;
        }

        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit;
        }

        ol,
        ul {
            padding-left: 2rem;
        }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0;
        }

        dt {
            font-weight: 700;
        }

        dd {
            margin-bottom: 0.5rem;
            margin-left: 0;
        }

        blockquote {
            margin: 0 0 1rem;
        }

        b,
        strong {
            font-weight: bolder;
        }

        small, .small {
            font-size: 0.875em;
        }

        mark, .mark {
            padding: 0.2em;
            background-color: #fcf8e3;
        }

        sub,
        sup {
            position: relative;
            font-size: 0.75em;
            line-height: 0;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        a {
            color: #066ac9;
            text-decoration: none;
        }
        a:hover {
            color: #0555a1;
        }

        a:not([href]):not([class]), a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none;
        }

        pre,
        code,
        kbd,
        samp {
            font-family: var(--bs-font-monospace);
            font-size: 1em;
            direction: ltr /* rtl:ignore */;
            unicode-bidi: bidi-override;
        }

        pre {
            display: block;
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            font-size: 0.875em;
        }
        pre code {
            font-size: inherit;
            color: inherit;
            word-break: normal;
        }

        code {
            font-size: 0.875em;
            color: #d63384;
            word-wrap: break-word;
        }
        a > code {
            color: inherit;
        }

        kbd {
            padding: 0.2rem 0.4rem;
            font-size: 0.875em;
            color: #fff;
            background-color: #212529;
            border-radius: 0.2rem;
        }
        kbd kbd {
            padding: 0;
            font-size: 1em;
            font-weight: 700;
        }

        figure {
            margin: 0 0 1rem;
        }

        img,
        svg {
            vertical-align: middle;
        }

        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        caption {
            padding-top: 1rem;
            padding-bottom: 1rem;
            color: #6c757d;
            text-align: left;
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent;
        }

        thead,
        tbody,
        tfoot,
        tr,
        td,
        th {
            border-color: inherit;
            border-style: solid;
            border-width: 0;
        }

        label {
            display: inline-block;
        }

        button {
            border-radius: 0;
        }

        button:focus:not(:focus-visible) {
            outline: 0;
        }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button,
        select {
            text-transform: none;
        }

        [role=button] {
            cursor: pointer;
        }

        select {
            word-wrap: normal;
        }
        select:disabled {
            opacity: 1;
        }

        [list]::-webkit-calendar-picker-indicator {
            display: none;
        }

        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
        }
        button:not(:disabled),
        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled) {
            cursor: pointer;
        }

        ::-moz-focus-inner {
            padding: 0;
            border-style: none;
        }

        textarea {
            resize: vertical;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        legend {
            float: left;
            width: 100%;
            padding: 0;
            margin-bottom: 0.5rem;
            font-size: calc(1.275rem + 0.3vw);
            line-height: inherit;
        }
        @media (min-width: 1200px) {
            legend {
                font-size: 1.5rem;
            }
        }
        legend + * {
            clear: left;
        }

        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-year-field {
            padding: 0;
        }

        ::-webkit-inner-spin-button {
            height: auto;
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: textfield;
        }

        /* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0;
        }

        ::-webkit-file-upload-button {
            font: inherit;
        }

        ::file-selector-button {
            font: inherit;
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button;
        }

        output {
            display: inline-block;
        }

        iframe {
            border: 0;
        }

        summary {
            display: list-item;
            cursor: pointer;
        }

        progress {
            vertical-align: baseline;
        }

        [hidden] {
            display: none !important;
        }

        .lead {
            font-size: 1.171875rem;
            font-weight: 400;
        }

        .display-1 {
            font-size: calc(1.725rem + 5.7vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-1 {
                font-size: 6rem;
            }
        }

        .display-2 {
            font-size: calc(1.675rem + 5.1vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-2 {
                font-size: 5.5rem;
            }
        }

        .display-3 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-3 {
                font-size: 5rem;
            }
        }

        .display-4 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-4 {
                font-size: 4.5rem;
            }
        }

        .display-5 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-5 {
                font-size: 4rem;
            }
        }

        .display-6 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 700;
            line-height: 1.25;
        }
        @media (min-width: 1200px) {
            .display-6 {
                font-size: 3.5rem;
            }
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .list-inline {
            padding-left: 0;
            list-style: none;
        }

        .list-inline-item {
            display: inline-block;
        }
        .list-inline-item:not(:last-child) {
            margin-right: 0.5rem;
        }

        .initialism {
            font-size: 0.875em;
            text-transform: uppercase;
        }

        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        .blockquote > :last-child {
            margin-bottom: 0;
        }

        .blockquote-footer {
            margin-top: -1rem;
            margin-bottom: 1rem;
            font-size: 0.875em;
            color: #6c757d;
        }
        .blockquote-footer::before {
            content: "— ";
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            max-width: 100%;
            height: auto;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1;
        }

        .figure-caption {
            font-size: 0.875em;
            color: #6c757d;
        }

        .container,
        .container-fluid,
        .container-xxl,
        .container-xl,
        .container-lg,
        .container-md,
        .container-sm {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.9375rem);
            padding-left: var(--bs-gutter-x, 0.9375rem);
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) {
            .container-sm, .container {
                max-width: 96%;
            }
        }
        @media (min-width: 768px) {
            .container-md, .container-sm, .container {
                max-width: 94%;
            }
        }
        @media (min-width: 992px) {
            .container-lg, .container-md, .container-sm, .container {
                max-width: 94%;
            }
        }
        @media (min-width: 1200px) {
            .container-xl, .container-lg, .container-md, .container-sm, .container {
                max-width: 1140px;
            }
        }
        @media (min-width: 1400px) {
            .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
                max-width: 1300px;
            }
        }
        .row {
            --bs-gutter-x: 1.875rem;
            --bs-gutter-y: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-0.5 * var(--bs-gutter-x));
            margin-left: calc(-0.5 * var(--bs-gutter-x));
        }
        .row > * {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            max-width: 100%;
            padding-right: calc(var(--bs-gutter-x) * 0.5);
            padding-left: calc(var(--bs-gutter-x) * 0.5);
            margin-top: var(--bs-gutter-y);
        }

        .col {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
        }

        .row-cols-auto > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .row-cols-1 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .row-cols-2 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .row-cols-3 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.3333333333%;
        }

        .row-cols-4 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .row-cols-5 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 20%;
        }

        .row-cols-6 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.6666666667%;
        }

        .col-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
        }

        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 8.33333333%;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 16.66666667%;
        }

        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 33.33333333%;
        }

        .col-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 41.66666667%;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        .col-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 58.33333333%;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 66.66666667%;
        }

        .col-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 75%;
        }

        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 83.33333333%;
        }

        .col-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 91.66666667%;
        }

        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 100%;
        }

        .offset-1 {
            margin-left: 8.33333333%;
        }

        .offset-2 {
            margin-left: 16.66666667%;
        }

        .offset-3 {
            margin-left: 25%;
        }

        .offset-4 {
            margin-left: 33.33333333%;
        }

        .offset-5 {
            margin-left: 41.66666667%;
        }

        .offset-6 {
            margin-left: 50%;
        }

        .offset-7 {
            margin-left: 58.33333333%;
        }

        .offset-8 {
            margin-left: 66.66666667%;
        }

        .offset-9 {
            margin-left: 75%;
        }

        .offset-10 {
            margin-left: 83.33333333%;
        }

        .offset-11 {
            margin-left: 91.66666667%;
        }

        .g-0,
        .gx-0 {
            --bs-gutter-x: 0;
        }

        .g-0,
        .gy-0 {
            --bs-gutter-y: 0;
        }

        .g-1,
        .gx-1 {
            --bs-gutter-x: 0.25rem;
        }

        .g-1,
        .gy-1 {
            --bs-gutter-y: 0.25rem;
        }

        .g-2,
        .gx-2 {
            --bs-gutter-x: 0.5rem;
        }

        .g-2,
        .gy-2 {
            --bs-gutter-y: 0.5rem;
        }

        .g-3,
        .gx-3 {
            --bs-gutter-x: 1rem;
        }

        .g-3,
        .gy-3 {
            --bs-gutter-y: 1rem;
        }

        .g-4,
        .gx-4 {
            --bs-gutter-x: 1.5rem;
        }

        .g-4,
        .gy-4 {
            --bs-gutter-y: 1.5rem;
        }

        .g-5,
        .gx-5 {
            --bs-gutter-x: 3rem;
        }

        .g-5,
        .gy-5 {
            --bs-gutter-y: 3rem;
        }

        @media (min-width: 576px) {
            .col-sm {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-sm-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-sm-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-sm-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-sm-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-sm-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-sm-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-sm-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-sm-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-sm-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-sm-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-sm-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-sm-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-sm-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-sm-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-sm-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-sm-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-sm-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-sm-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-sm-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-sm-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-sm-0 {
                margin-left: 0;
            }

            .offset-sm-1 {
                margin-left: 8.33333333%;
            }

            .offset-sm-2 {
                margin-left: 16.66666667%;
            }

            .offset-sm-3 {
                margin-left: 25%;
            }

            .offset-sm-4 {
                margin-left: 33.33333333%;
            }

            .offset-sm-5 {
                margin-left: 41.66666667%;
            }

            .offset-sm-6 {
                margin-left: 50%;
            }

            .offset-sm-7 {
                margin-left: 58.33333333%;
            }

            .offset-sm-8 {
                margin-left: 66.66666667%;
            }

            .offset-sm-9 {
                margin-left: 75%;
            }

            .offset-sm-10 {
                margin-left: 83.33333333%;
            }

            .offset-sm-11 {
                margin-left: 91.66666667%;
            }

            .g-sm-0,
            .gx-sm-0 {
                --bs-gutter-x: 0;
            }

            .g-sm-0,
            .gy-sm-0 {
                --bs-gutter-y: 0;
            }

            .g-sm-1,
            .gx-sm-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-sm-1,
            .gy-sm-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-sm-2,
            .gx-sm-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-sm-2,
            .gy-sm-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-sm-3,
            .gx-sm-3 {
                --bs-gutter-x: 1rem;
            }

            .g-sm-3,
            .gy-sm-3 {
                --bs-gutter-y: 1rem;
            }

            .g-sm-4,
            .gx-sm-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-sm-4,
            .gy-sm-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-sm-5,
            .gx-sm-5 {
                --bs-gutter-x: 3rem;
            }

            .g-sm-5,
            .gy-sm-5 {
                --bs-gutter-y: 3rem;
            }
        }
        @media (min-width: 768px) {
            .col-md {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-md-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-md-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-md-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-md-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-md-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-md-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-md-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-md-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-md-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-md-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-md-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-md-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-md-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-md-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-md-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-md-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-md-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-md-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-md-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-md-0 {
                margin-left: 0;
            }

            .offset-md-1 {
                margin-left: 8.33333333%;
            }

            .offset-md-2 {
                margin-left: 16.66666667%;
            }

            .offset-md-3 {
                margin-left: 25%;
            }

            .offset-md-4 {
                margin-left: 33.33333333%;
            }

            .offset-md-5 {
                margin-left: 41.66666667%;
            }

            .offset-md-6 {
                margin-left: 50%;
            }

            .offset-md-7 {
                margin-left: 58.33333333%;
            }

            .offset-md-8 {
                margin-left: 66.66666667%;
            }

            .offset-md-9 {
                margin-left: 75%;
            }

            .offset-md-10 {
                margin-left: 83.33333333%;
            }

            .offset-md-11 {
                margin-left: 91.66666667%;
            }

            .g-md-0,
            .gx-md-0 {
                --bs-gutter-x: 0;
            }

            .g-md-0,
            .gy-md-0 {
                --bs-gutter-y: 0;
            }

            .g-md-1,
            .gx-md-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-md-1,
            .gy-md-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-md-2,
            .gx-md-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-md-2,
            .gy-md-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-md-3,
            .gx-md-3 {
                --bs-gutter-x: 1rem;
            }

            .g-md-3,
            .gy-md-3 {
                --bs-gutter-y: 1rem;
            }

            .g-md-4,
            .gx-md-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-md-4,
            .gy-md-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-md-5,
            .gx-md-5 {
                --bs-gutter-x: 3rem;
            }

            .g-md-5,
            .gy-md-5 {
                --bs-gutter-y: 3rem;
            }
        }
        @media (min-width: 992px) {
            .col-lg {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-lg-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-lg-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-lg-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-lg-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-lg-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-lg-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-lg-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-lg-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-lg-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-lg-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-lg-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-lg-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-lg-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-lg-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-lg-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-lg-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-lg-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-lg-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-lg-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-lg-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-lg-0 {
                margin-left: 0;
            }

            .offset-lg-1 {
                margin-left: 8.33333333%;
            }

            .offset-lg-2 {
                margin-left: 16.66666667%;
            }

            .offset-lg-3 {
                margin-left: 25%;
            }

            .offset-lg-4 {
                margin-left: 33.33333333%;
            }

            .offset-lg-5 {
                margin-left: 41.66666667%;
            }

            .offset-lg-6 {
                margin-left: 50%;
            }

            .offset-lg-7 {
                margin-left: 58.33333333%;
            }

            .offset-lg-8 {
                margin-left: 66.66666667%;
            }

            .offset-lg-9 {
                margin-left: 75%;
            }

            .offset-lg-10 {
                margin-left: 83.33333333%;
            }

            .offset-lg-11 {
                margin-left: 91.66666667%;
            }

            .g-lg-0,
            .gx-lg-0 {
                --bs-gutter-x: 0;
            }

            .g-lg-0,
            .gy-lg-0 {
                --bs-gutter-y: 0;
            }

            .g-lg-1,
            .gx-lg-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-lg-1,
            .gy-lg-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-lg-2,
            .gx-lg-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-lg-2,
            .gy-lg-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-lg-3,
            .gx-lg-3 {
                --bs-gutter-x: 1rem;
            }

            .g-lg-3,
            .gy-lg-3 {
                --bs-gutter-y: 1rem;
            }

            .g-lg-4,
            .gx-lg-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-lg-4,
            .gy-lg-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-lg-5,
            .gx-lg-5 {
                --bs-gutter-x: 3rem;
            }

            .g-lg-5,
            .gy-lg-5 {
                --bs-gutter-y: 3rem;
            }
        }
        @media (min-width: 1200px) {
            .col-xl {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-xl-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-xl-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-xl-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-xl-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-xl-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-xl-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-xl-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-xl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-xl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-xl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-xl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-xl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-xl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-xl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-xl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-xl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-xl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-xl-0 {
                margin-left: 0;
            }

            .offset-xl-1 {
                margin-left: 8.33333333%;
            }

            .offset-xl-2 {
                margin-left: 16.66666667%;
            }

            .offset-xl-3 {
                margin-left: 25%;
            }

            .offset-xl-4 {
                margin-left: 33.33333333%;
            }

            .offset-xl-5 {
                margin-left: 41.66666667%;
            }

            .offset-xl-6 {
                margin-left: 50%;
            }

            .offset-xl-7 {
                margin-left: 58.33333333%;
            }

            .offset-xl-8 {
                margin-left: 66.66666667%;
            }

            .offset-xl-9 {
                margin-left: 75%;
            }

            .offset-xl-10 {
                margin-left: 83.33333333%;
            }

            .offset-xl-11 {
                margin-left: 91.66666667%;
            }

            .g-xl-0,
            .gx-xl-0 {
                --bs-gutter-x: 0;
            }

            .g-xl-0,
            .gy-xl-0 {
                --bs-gutter-y: 0;
            }

            .g-xl-1,
            .gx-xl-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-xl-1,
            .gy-xl-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-xl-2,
            .gx-xl-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-xl-2,
            .gy-xl-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-xl-3,
            .gx-xl-3 {
                --bs-gutter-x: 1rem;
            }

            .g-xl-3,
            .gy-xl-3 {
                --bs-gutter-y: 1rem;
            }

            .g-xl-4,
            .gx-xl-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-xl-4,
            .gy-xl-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-xl-5,
            .gx-xl-5 {
                --bs-gutter-x: 3rem;
            }

            .g-xl-5,
            .gy-xl-5 {
                --bs-gutter-y: 3rem;
            }
        }
        @media (min-width: 1400px) {
            .col-xxl {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
            }

            .row-cols-xxl-auto > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .row-cols-xxl-1 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .row-cols-xxl-2 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .row-cols-xxl-3 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.3333333333%;
            }

            .row-cols-xxl-4 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .row-cols-xxl-5 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 20%;
            }

            .row-cols-xxl-6 > * {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.6666666667%;
            }

            .col-xxl-auto {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
            }

            .col-xxl-1 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 8.33333333%;
            }

            .col-xxl-2 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 16.66666667%;
            }

            .col-xxl-3 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 25%;
            }

            .col-xxl-4 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 33.33333333%;
            }

            .col-xxl-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 41.66666667%;
            }

            .col-xxl-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 50%;
            }

            .col-xxl-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 58.33333333%;
            }

            .col-xxl-8 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 66.66666667%;
            }

            .col-xxl-9 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 75%;
            }

            .col-xxl-10 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 83.33333333%;
            }

            .col-xxl-11 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 91.66666667%;
            }

            .col-xxl-12 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
            }

            .offset-xxl-0 {
                margin-left: 0;
            }

            .offset-xxl-1 {
                margin-left: 8.33333333%;
            }

            .offset-xxl-2 {
                margin-left: 16.66666667%;
            }

            .offset-xxl-3 {
                margin-left: 25%;
            }

            .offset-xxl-4 {
                margin-left: 33.33333333%;
            }

            .offset-xxl-5 {
                margin-left: 41.66666667%;
            }

            .offset-xxl-6 {
                margin-left: 50%;
            }

            .offset-xxl-7 {
                margin-left: 58.33333333%;
            }

            .offset-xxl-8 {
                margin-left: 66.66666667%;
            }

            .offset-xxl-9 {
                margin-left: 75%;
            }

            .offset-xxl-10 {
                margin-left: 83.33333333%;
            }

            .offset-xxl-11 {
                margin-left: 91.66666667%;
            }

            .g-xxl-0,
            .gx-xxl-0 {
                --bs-gutter-x: 0;
            }

            .g-xxl-0,
            .gy-xxl-0 {
                --bs-gutter-y: 0;
            }

            .g-xxl-1,
            .gx-xxl-1 {
                --bs-gutter-x: 0.25rem;
            }

            .g-xxl-1,
            .gy-xxl-1 {
                --bs-gutter-y: 0.25rem;
            }

            .g-xxl-2,
            .gx-xxl-2 {
                --bs-gutter-x: 0.5rem;
            }

            .g-xxl-2,
            .gy-xxl-2 {
                --bs-gutter-y: 0.5rem;
            }

            .g-xxl-3,
            .gx-xxl-3 {
                --bs-gutter-x: 1rem;
            }

            .g-xxl-3,
            .gy-xxl-3 {
                --bs-gutter-y: 1rem;
            }

            .g-xxl-4,
            .gx-xxl-4 {
                --bs-gutter-x: 1.5rem;
            }

            .g-xxl-4,
            .gy-xxl-4 {
                --bs-gutter-y: 1.5rem;
            }

            .g-xxl-5,
            .gx-xxl-5 {
                --bs-gutter-x: 3rem;
            }

            .g-xxl-5,
            .gy-xxl-5 {
                --bs-gutter-y: 3rem;
            }
        }
        .table {
            --bs-table-bg: transparent;
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: #212529;
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: #212529;
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: #212529;
            --bs-table-hover-bg: rgba(36, 41, 45, 0.075);
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            vertical-align: top;
            border-color: #dee2e6;
        }
        .table > :not(caption) > * > * {
            padding: 1rem 0.5rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }
        .table > tbody {
            vertical-align: inherit;
        }
        .table > thead {
            vertical-align: bottom;
        }
        .table > :not(:first-child) {
            border-top: 2px solid #9a9ea4;
        }

        .caption-top {
            caption-side: top;
        }

        .table-sm > :not(caption) > * > * {
            padding: 0.25rem 0.25rem;
        }

        .table-bordered > :not(caption) > * {
            border-width: 1px 0;
        }
        .table-bordered > :not(caption) > * > * {
            border-width: 0 1px;
        }

        .table-borderless > :not(caption) > * > * {
            border-bottom-width: 0;
        }
        .table-borderless > :not(:first-child) {
            border-top-width: 0;
        }

        .table-striped > tbody > tr:nth-of-type(odd) > * {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color);
        }

        .table-active {
            --bs-table-accent-bg: var(--bs-table-active-bg);
            color: var(--bs-table-active-color);
        }

        .table-hover > tbody > tr:hover > * {
            --bs-table-accent-bg: var(--bs-table-hover-bg);
            color: var(--bs-table-hover-color);
        }

        .table-primary {
            --bs-table-bg: #cfe2ff;
            --bs-table-striped-bg: #c5d7f2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bacbe6;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfd1ec;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #bacbe6;
        }

        .table-secondary {
            --bs-table-bg: #e2e3e5;
            --bs-table-striped-bg: #d7d8da;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #cbccce;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #d1d2d4;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #cbccce;
        }

        .table-success {
            --bs-table-bg: #d1e7dd;
            --bs-table-striped-bg: #c7dbd2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bcd0c7;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #c1d6cc;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #bcd0c7;
        }

        .table-info {
            --bs-table-bg: #cff4fc;
            --bs-table-striped-bg: #c5e8ef;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #badce3;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfe2e9;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #badce3;
        }

        .table-warning {
            --bs-table-bg: #fff3cd;
            --bs-table-striped-bg: #f2e7c3;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e6dbb9;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #ece1be;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #e6dbb9;
        }

        .table-danger {
            --bs-table-bg: #f8d7da;
            --bs-table-striped-bg: #eccccf;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfc2c4;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5c7ca;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #dfc2c4;
        }

        .table-light {
            --bs-table-bg: #f8f9fa;
            --bs-table-striped-bg: #ecedee;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfe0e1;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5e6e7;
            --bs-table-hover-color: #000;
            color: #000;
            border-color: #dfe0e1;
        }

        .table-dark {
            --bs-table-bg: #212529;
            --bs-table-striped-bg: #2c3034;
            --bs-table-striped-color: #fff;
            --bs-table-active-bg: #373b3e;
            --bs-table-active-color: #fff;
            --bs-table-hover-bg: #323539;
            --bs-table-hover-color: #fff;
            color: #fff;
            border-color: #373b3e;
        }

        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        @media (max-width: 767.98px) {
            .table-responsive-md {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        @media (max-width: 991.98px) {
            .table-responsive-lg {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        @media (max-width: 1399.98px) {
            .table-responsive-xxl {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        .form-label {
            margin-bottom: 0.5rem;
        }

        .col-form-label {
            padding-top: calc(0.5rem + 1px);
            padding-bottom: calc(0.5rem + 1px);
            margin-bottom: 0;
            font-size: inherit;
            line-height: 1.5;
        }

        .col-form-label-lg {
            padding-top: calc(0.8rem + 1px);
            padding-bottom: calc(0.8rem + 1px);
            font-size: 1rem;
        }

        .col-form-label-sm {
            padding-top: calc(0.4rem + 1px);
            padding-bottom: calc(0.4rem + 1px);
            font-size: 0.8125rem;
        }

        .form-text {
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #6c757d;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.5rem 1rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.5;
            color: #404448;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #dde0e3;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.325rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-control {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-control[type=file] {
            overflow: hidden;
        }
        .form-control[type=file]:not(:disabled):not([readonly]) {
            cursor: pointer;
        }
        .form-control:focus {
            color: #404448;
            background-color: #fff;
            border-color: #066ac9;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
        }
        .form-control::-webkit-date-and-time-value {
            height: 1.5em;
        }
        .form-control::-webkit-input-placeholder {
            color: #9a9ea4;
            opacity: 1;
        }
        .form-control::-moz-placeholder {
            color: #9a9ea4;
            opacity: 1;
        }
        .form-control:-ms-input-placeholder {
            color: #9a9ea4;
            opacity: 1;
        }
        .form-control::-ms-input-placeholder {
            color: #9a9ea4;
            opacity: 1;
        }
        .form-control::placeholder {
            color: #9a9ea4;
            opacity: 1;
        }
        .form-control:disabled, .form-control[readonly] {
            background-color: #eff1f2;
            border-color: #ced4da;
            opacity: 1;
        }
        .form-control::-webkit-file-upload-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .form-control::file-selector-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-control::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none;
            }
            .form-control::file-selector-button {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #dde0e3;
        }
        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #dde0e3;
        }
        .form-control::-webkit-file-upload-button {
            padding: 0.5rem 1rem;
            margin: -0.5rem -1rem;
            -webkit-margin-end: 1rem;
            margin-inline-end: 1rem;
            color: #212529;
            background-color: #e9ecef;
            pointer-events: none;
            border-color: inherit;
            border-style: solid;
            border-width: 0;
            border-inline-end-width: 1px;
            border-radius: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-control::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #dde0e3;
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: 0.5rem 0;
            margin-bottom: 0;
            line-height: 1.5;
            color: #212529;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
        }
        .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
            padding-right: 0;
            padding-left: 0;
        }

        .form-control-sm {
            min-height: calc(1.25em + 0.8rem + 2px);
            padding: 0.4rem 0.8rem;
            font-size: 0.8125rem;
            border-radius: 0.2rem;
        }
        .form-control-sm::-webkit-file-upload-button {
            padding: 0.4rem 0.8rem;
            margin: -0.4rem -0.8rem;
            -webkit-margin-end: 0.8rem;
            margin-inline-end: 0.8rem;
        }
        .form-control-sm::file-selector-button {
            padding: 0.4rem 0.8rem;
            margin: -0.4rem -0.8rem;
            -webkit-margin-end: 0.8rem;
            margin-inline-end: 0.8rem;
        }
        .form-control-sm::-webkit-file-upload-button {
            padding: 0.4rem 0.8rem;
            margin: -0.4rem -0.8rem;
            -webkit-margin-end: 0.8rem;
            margin-inline-end: 0.8rem;
        }

        .form-control-lg {
            min-height: calc(1.25em + 1.6rem + 2px);
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.2rem;
        }
        .form-control-lg::-webkit-file-upload-button {
            padding: 0.8rem 1.5rem;
            margin: -0.8rem -1.5rem;
            -webkit-margin-end: 1.5rem;
            margin-inline-end: 1.5rem;
        }
        .form-control-lg::file-selector-button {
            padding: 0.8rem 1.5rem;
            margin: -0.8rem -1.5rem;
            -webkit-margin-end: 1.5rem;
            margin-inline-end: 1.5rem;
        }
        .form-control-lg::-webkit-file-upload-button {
            padding: 0.8rem 1.5rem;
            margin: -0.8rem -1.5rem;
            -webkit-margin-end: 1.5rem;
            margin-inline-end: 1.5rem;
        }

        textarea.form-control {
            min-height: calc(1.5em + 1rem + 2px);
        }
        textarea.form-control-sm {
            min-height: calc(1.25em + 0.8rem + 2px);
        }
        textarea.form-control-lg {
            min-height: calc(1.25em + 1.6rem + 2px);
        }

        .form-control-color {
            width: 3rem;
            height: auto;
            padding: 0.5rem;
        }
        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer;
        }
        .form-control-color::-moz-color-swatch {
            height: 1.5em;
            border-radius: 0.325rem;
        }
        .form-control-color::-webkit-color-swatch {
            height: 1.5em;
            border-radius: 0.325rem;
        }

        .form-select {
            display: block;
            width: 100%;
            padding: 0.5rem 2.25rem 0.5rem 1rem;
            -moz-padding-start: calc(1rem - 3px);
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.5;
            color: #404448;
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23747579' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
            border: 1px solid #ced4da;
            border-radius: 0.325rem;
            -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-select {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-select:focus {
            border-color: #066ac9;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
        }
        .form-select[multiple], .form-select[size]:not([size="1"]) {
            padding-right: 1rem;
            background-image: none;
        }
        .form-select:disabled {
            background-color: #e9ecef;
            border-color: #ced4da;
        }
        .form-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #404448;
        }

        .form-select-sm {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            padding-left: 0.5rem;
            font-size: 0.875rem;
            border-radius: 0.2rem;
        }

        .form-select-lg {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 1rem;
            font-size: 1.25rem;
            border-radius: 0.3rem;
        }

        .form-check {
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5em;
            margin-bottom: 0.125rem;
        }
        .form-check .form-check-input {
            float: left;
            margin-left: -1.5em;
        }

        .form-check-input {
            width: 1em;
            height: 1em;
            margin-top: 0.25em;
            vertical-align: top;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid rgba(0, 0, 0, 0.25);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            -webkit-print-color-adjust: exact;
            color-adjust: exact;
        }
        .form-check-input[type=checkbox] {
            border-radius: 0.25em;
        }
        .form-check-input[type=radio] {
            border-radius: 50%;
        }
        .form-check-input:active {
            -webkit-filter: brightness(90%);
            filter: brightness(90%);
        }
        .form-check-input:focus {
            border-color: #066ac9;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
        }
        .form-check-input:checked {
            background-color: #066ac9;
            border-color: #066ac9;
        }
        .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
        }
        .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e");
        }
        .form-check-input[type=checkbox]:indeterminate {
            background-color: #066ac9;
            border-color: #066ac9;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
        }
        .form-check-input:disabled {
            pointer-events: none;
            -webkit-filter: none;
            filter: none;
            opacity: 0.5;
        }
        .form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
            opacity: 0.5;
        }

        .form-switch {
            padding-left: 2.5em;
        }
        .form-switch .form-check-input {
            width: 2em;
            margin-left: -2.5em;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
            background-position: left center;
            border-radius: 2em;
            -webkit-transition: background-position 0.15s ease-in-out;
            transition: background-position 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-switch .form-check-input {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23066ac9'/%3e%3c/svg%3e");
        }
        .form-switch .form-check-input:checked {
            background-position: right center;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
        }

        .form-check-inline {
            display: inline-block;
            margin-right: 1rem;
        }

        .btn-check {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
        }
        .btn-check[disabled] + .btn, .btn-check:disabled + .btn {
            pointer-events: none;
            -webkit-filter: none;
            filter: none;
            opacity: 0.65;
        }

        .form-range {
            width: 100%;
            height: 1.5rem;
            padding: 0;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .form-range:focus {
            outline: 0;
        }
        .form-range:focus::-webkit-slider-thumb {
            -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0 rgba(6, 106, 201, 0.25);
            box-shadow: 0 0 0 1px #fff, 0 0 0 0 rgba(6, 106, 201, 0.25);
        }
        .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #fff, 0 0 0 0 rgba(6, 106, 201, 0.25);
        }
        .form-range::-moz-focus-outer {
            border: 0;
        }
        .form-range::-webkit-slider-thumb {
            width: 1rem;
            height: 1rem;
            margin-top: -0.25rem;
            background-color: #066ac9;
            border: 0;
            border-radius: 1rem;
            -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            -webkit-appearance: none;
            appearance: none;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-range::-webkit-slider-thumb:active {
            background-color: #b4d2ef;
        }
        .form-range::-webkit-slider-runnable-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
        }
        .form-range::-moz-range-thumb {
            width: 1rem;
            height: 1rem;
            background-color: #066ac9;
            border: 0;
            border-radius: 1rem;
            -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            -moz-appearance: none;
            appearance: none;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none;
            }
        }
        .form-range::-moz-range-thumb:active {
            background-color: #b4d2ef;
        }
        .form-range::-moz-range-track {
            width: 100%;
            height: 0.5rem;
            color: transparent;
            cursor: pointer;
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
        }
        .form-range:disabled {
            pointer-events: none;
        }
        .form-range:disabled::-webkit-slider-thumb {
            background-color: #9a9ea4;
        }
        .form-range:disabled::-moz-range-thumb {
            background-color: #9a9ea4;
        }

        .form-floating {
            position: relative;
        }
        .form-floating > .form-control,
        .form-floating > .form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25;
        }
        .form-floating > label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem 0.75rem;
            pointer-events: none;
            border: 1px solid transparent;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .form-floating > label {
                -webkit-transition: none;
                transition: none;
            }
        }
        .form-floating > .form-control {
            padding: 1rem 0.75rem;
        }
        .form-floating > .form-control::-webkit-input-placeholder {
            color: transparent;
        }
        .form-floating > .form-control::-moz-placeholder {
            color: transparent;
        }
        .form-floating > .form-control:-ms-input-placeholder {
            color: transparent;
        }
        .form-floating > .form-control::-ms-input-placeholder {
            color: transparent;
        }
        .form-floating > .form-control::placeholder {
            color: transparent;
        }
        .form-floating > .form-control:not(:-moz-placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-control:not(:-ms-input-placeholder) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown) {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-control:-webkit-autofill {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-select {
            padding-top: 1.625rem;
            padding-bottom: 0.625rem;
        }
        .form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-floating > .form-control:not(:-ms-input-placeholder) ~ label {
            opacity: 0.65;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label,
        .form-floating > .form-select ~ label {
            opacity: 0.65;
            -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        .form-floating > .form-control:-webkit-autofill ~ label {
            opacity: 0.65;
            -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .input-group {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
        }
        .input-group > .form-control,
        .input-group > .form-select {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
        }
        .input-group > .form-control:focus,
        .input-group > .form-select:focus {
            z-index: 3;
        }
        .input-group .btn {
            position: relative;
            z-index: 2;
        }
        .input-group .btn:focus {
            z-index: 3;
        }

        .input-group-text {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.375rem 0.75rem;
            font-size: 0.9375rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: center;
            white-space: nowrap;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 0.325rem;
        }

        .input-group-lg > .form-control,
        .input-group-lg > .form-select,
        .input-group-lg > .input-group-text,
        .input-group-lg > .btn {
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.2rem;
        }

        .input-group-sm > .form-control,
        .input-group-sm > .form-select,
        .input-group-sm > .input-group-text,
        .input-group-sm > .btn {
            padding: 0.4rem 0.8rem;
            font-size: 0.8125rem;
            border-radius: 0.2rem;
        }

        .input-group-lg > .form-select,
        .input-group-sm > .form-select {
            padding-right: 3.25rem;
        }

        .input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
        .input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),
        .input-group.has-validation > .dropdown-toggle:nth-last-child(n+4) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .valid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #198754;
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #fff;
            background-color: rgba(25, 135, 84, 0.9);
            border-radius: 0.25rem;
        }

        .was-validated :valid ~ .valid-feedback,
        .was-validated :valid ~ .valid-tooltip,
        .is-valid ~ .valid-feedback,
        .is-valid ~ .valid-tooltip {
            display: block;
        }

        .was-validated .form-control:valid, .form-control.is-valid {
            border-color: #198754;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
            border-color: #198754;
            -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
            box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
        }

        .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        .was-validated .form-select:valid, .form-select.is-valid {
            border-color: #198754;
        }
        .was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
            padding-right: 4.125rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23747579' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-position: right 0.75rem center, center right 2.25rem;
            background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .was-validated .form-select:valid:focus, .form-select.is-valid:focus {
            border-color: #198754;
            -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
            box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
        }

        .was-validated .form-check-input:valid, .form-check-input.is-valid {
            border-color: #198754;
        }
        .was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
            background-color: #198754;
        }
        .was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
            -webkit-box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
            box-shadow: 0 0 0 1px rgba(25, 135, 84, 0.25);
        }
        .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
            color: #198754;
        }

        .form-check-inline .form-check-input ~ .valid-feedback {
            margin-left: 0.5em;
        }

        .was-validated .input-group .form-control:valid, .input-group .form-control.is-valid,
        .was-validated .input-group .form-select:valid,
        .input-group .form-select.is-valid {
            z-index: 1;
        }
        .was-validated .input-group .form-control:valid:focus, .input-group .form-control.is-valid:focus,
        .was-validated .input-group .form-select:valid:focus,
        .input-group .form-select.is-valid:focus {
            z-index: 3;
        }

        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 0.875em;
            color: #dc3545;
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: 0.25rem 0.5rem;
            margin-top: 0.1rem;
            font-size: 0.875rem;
            color: #fff;
            background-color: rgba(220, 53, 69, 0.9);
            border-radius: 0.25rem;
        }

        .was-validated :invalid ~ .invalid-feedback,
        .was-validated :invalid ~ .invalid-tooltip,
        .is-invalid ~ .invalid-feedback,
        .is-invalid ~ .invalid-tooltip {
            display: block;
        }

        .was-validated .form-control:invalid, .form-control.is-invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
            border-color: #dc3545;
            -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
        }

        .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
            padding-right: calc(1.5em + 0.75rem);
            background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
        }

        .was-validated .form-select:invalid, .form-select.is-invalid {
            border-color: #dc3545;
        }
        .was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
            padding-right: 4.125rem;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23747579' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-position: right 0.75rem center, center right 2.25rem;
            background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
        .was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
            border-color: #dc3545;
            -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
        }

        .was-validated .form-check-input:invalid, .form-check-input.is-invalid {
            border-color: #dc3545;
        }
        .was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
            background-color: #dc3545;
        }
        .was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
            -webkit-box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
            box-shadow: 0 0 0 1px rgba(220, 53, 69, 0.25);
        }
        .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
            color: #dc3545;
        }

        .form-check-inline .form-check-input ~ .invalid-feedback {
            margin-left: 0.5em;
        }

        .was-validated .input-group .form-control:invalid, .input-group .form-control.is-invalid,
        .was-validated .input-group .form-select:invalid,
        .input-group .form-select.is-invalid {
            z-index: 2;
        }
        .was-validated .input-group .form-control:invalid:focus, .input-group .form-control.is-invalid:focus,
        .was-validated .input-group .form-select:invalid:focus,
        .input-group .form-select.is-invalid:focus {
            z-index: 3;
        }

        .btn {
            display: inline-block;
            font-weight: 500;
            line-height: 1.5;
            color: #747579;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.5rem 1rem;
            font-size: 0.9375rem;
            border-radius: 0.325rem;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .btn {
                -webkit-transition: none;
                transition: none;
            }
        }
        .btn:hover {
            color: #747579;
        }
        .btn-check:focus + .btn, .btn:focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
        }
        .btn:disabled, .btn.disabled, fieldset:disabled .btn {
            pointer-events: none;
            opacity: 0.65;
        }

        .btn-primary {
            color: #fff;
            background-color: #066ac9;
            border-color: #066ac9;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #055aab;
            border-color: #0555a1;
        }
        .btn-check:focus + .btn-primary, .btn-primary:focus {
            color: #fff;
            background-color: #055aab;
            border-color: #0555a1;
            -webkit-box-shadow: 0 0 0 0 rgba(43, 128, 209, 0.5);
            box-shadow: 0 0 0 0 rgba(43, 128, 209, 0.5);
        }
        .btn-check:checked + .btn-primary, .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #0555a1;
            border-color: #055097;
        }
        .btn-check:checked + .btn-primary:focus, .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus, .show > .btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(43, 128, 209, 0.5);
            box-shadow: 0 0 0 0 rgba(43, 128, 209, 0.5);
        }
        .btn-primary:disabled, .btn-primary.disabled {
            color: #fff;
            background-color: #066ac9;
            border-color: #066ac9;
        }

        .btn-white {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }
        .btn-white:hover {
            color: #000;
            background-color: white;
            border-color: white;
        }
        .btn-check:focus + .btn-white, .btn-white:focus {
            color: #000;
            background-color: white;
            border-color: white;
            -webkit-box-shadow: 0 0 0 0 rgba(217, 217, 217, 0.5);
            box-shadow: 0 0 0 0 rgba(217, 217, 217, 0.5);
        }
        .btn-check:checked + .btn-white, .btn-check:active + .btn-white, .btn-white:active, .btn-white.active, .show > .btn-white.dropdown-toggle {
            color: #000;
            background-color: white;
            border-color: white;
        }
        .btn-check:checked + .btn-white:focus, .btn-check:active + .btn-white:focus, .btn-white:active:focus, .btn-white.active:focus, .show > .btn-white.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(217, 217, 217, 0.5);
            box-shadow: 0 0 0 0 rgba(217, 217, 217, 0.5);
        }
        .btn-white:disabled, .btn-white.disabled {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-secondary {
            color: #fff;
            background-color: #9a9ea4;
            border-color: #9a9ea4;
        }
        .btn-secondary:hover {
            color: #fff;
            background-color: #83868b;
            border-color: #7b7e83;
        }
        .btn-check:focus + .btn-secondary, .btn-secondary:focus {
            color: #fff;
            background-color: #83868b;
            border-color: #7b7e83;
            -webkit-box-shadow: 0 0 0 0 rgba(169, 173, 178, 0.5);
            box-shadow: 0 0 0 0 rgba(169, 173, 178, 0.5);
        }
        .btn-check:checked + .btn-secondary, .btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active, .show > .btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #7b7e83;
            border-color: #74777b;
        }
        .btn-check:checked + .btn-secondary:focus, .btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus, .show > .btn-secondary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(169, 173, 178, 0.5);
            box-shadow: 0 0 0 0 rgba(169, 173, 178, 0.5);
        }
        .btn-secondary:disabled, .btn-secondary.disabled {
            color: #fff;
            background-color: #9a9ea4;
            border-color: #9a9ea4;
        }

        .btn-success {
            color: #fff;
            background-color: #0cbc87;
            border-color: #0cbc87;
        }
        .btn-success:hover {
            color: #fff;
            background-color: #0aa073;
            border-color: #0a966c;
        }
        .btn-check:focus + .btn-success, .btn-success:focus {
            color: #fff;
            background-color: #0aa073;
            border-color: #0a966c;
            -webkit-box-shadow: 0 0 0 0 rgba(48, 198, 153, 0.5);
            box-shadow: 0 0 0 0 rgba(48, 198, 153, 0.5);
        }
        .btn-check:checked + .btn-success, .btn-check:active + .btn-success, .btn-success:active, .btn-success.active, .show > .btn-success.dropdown-toggle {
            color: #fff;
            background-color: #0a966c;
            border-color: #098d65;
        }
        .btn-check:checked + .btn-success:focus, .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus, .show > .btn-success.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(48, 198, 153, 0.5);
            box-shadow: 0 0 0 0 rgba(48, 198, 153, 0.5);
        }
        .btn-success:disabled, .btn-success.disabled {
            color: #fff;
            background-color: #0cbc87;
            border-color: #0cbc87;
        }

        .btn-info {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-info:hover {
            color: #fff;
            background-color: #148a9c;
            border-color: #128293;
        }
        .btn-check:focus + .btn-info, .btn-info:focus {
            color: #fff;
            background-color: #148a9c;
            border-color: #128293;
            -webkit-box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
            box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
        }
        .btn-check:checked + .btn-info, .btn-check:active + .btn-info, .btn-info:active, .btn-info.active, .show > .btn-info.dropdown-toggle {
            color: #fff;
            background-color: #128293;
            border-color: #117a8a;
        }
        .btn-check:checked + .btn-info:focus, .btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus, .show > .btn-info.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
            box-shadow: 0 0 0 0 rgba(58, 176, 195, 0.5);
        }
        .btn-info:disabled, .btn-info.disabled {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-warning {
            color: #000;
            background-color: #f7c32e;
            border-color: #f7c32e;
        }
        .btn-warning:hover {
            color: #000;
            background-color: #f8cc4d;
            border-color: #f8c943;
        }
        .btn-check:focus + .btn-warning, .btn-warning:focus {
            color: #000;
            background-color: #f8cc4d;
            border-color: #f8c943;
            -webkit-box-shadow: 0 0 0 0 rgba(210, 166, 39, 0.5);
            box-shadow: 0 0 0 0 rgba(210, 166, 39, 0.5);
        }
        .btn-check:checked + .btn-warning, .btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active, .show > .btn-warning.dropdown-toggle {
            color: #000;
            background-color: #f9cf58;
            border-color: #f8c943;
        }
        .btn-check:checked + .btn-warning:focus, .btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus, .show > .btn-warning.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(210, 166, 39, 0.5);
            box-shadow: 0 0 0 0 rgba(210, 166, 39, 0.5);
        }
        .btn-warning:disabled, .btn-warning.disabled {
            color: #000;
            background-color: #f7c32e;
            border-color: #f7c32e;
        }

        .btn-danger {
            color: #fff;
            background-color: #d6293e;
            border-color: #d6293e;
        }
        .btn-danger:hover {
            color: #fff;
            background-color: #b62335;
            border-color: #ab2132;
        }
        .btn-check:focus + .btn-danger, .btn-danger:focus {
            color: #fff;
            background-color: #b62335;
            border-color: #ab2132;
            -webkit-box-shadow: 0 0 0 0 rgba(220, 73, 91, 0.5);
            box-shadow: 0 0 0 0 rgba(220, 73, 91, 0.5);
        }
        .btn-check:checked + .btn-danger, .btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active, .show > .btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #ab2132;
            border-color: #a11f2f;
        }
        .btn-check:checked + .btn-danger:focus, .btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus, .show > .btn-danger.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(220, 73, 91, 0.5);
            box-shadow: 0 0 0 0 rgba(220, 73, 91, 0.5);
        }
        .btn-danger:disabled, .btn-danger.disabled {
            color: #fff;
            background-color: #d6293e;
            border-color: #d6293e;
        }

        .btn-light {
            color: #000;
            background-color: #f5f7f9;
            border-color: #f5f7f9;
        }
        .btn-light:hover {
            color: #000;
            background-color: #f7f8fa;
            border-color: #f6f8fa;
        }
        .btn-check:focus + .btn-light, .btn-light:focus {
            color: #000;
            background-color: #f7f8fa;
            border-color: #f6f8fa;
            -webkit-box-shadow: 0 0 0 0 rgba(208, 210, 212, 0.5);
            box-shadow: 0 0 0 0 rgba(208, 210, 212, 0.5);
        }
        .btn-check:checked + .btn-light, .btn-check:active + .btn-light, .btn-light:active, .btn-light.active, .show > .btn-light.dropdown-toggle {
            color: #000;
            background-color: #f7f9fa;
            border-color: #f6f8fa;
        }
        .btn-check:checked + .btn-light:focus, .btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus, .show > .btn-light.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(208, 210, 212, 0.5);
            box-shadow: 0 0 0 0 rgba(208, 210, 212, 0.5);
        }
        .btn-light:disabled, .btn-light.disabled {
            color: #000;
            background-color: #f5f7f9;
            border-color: #f5f7f9;
        }

        .btn-dark {
            color: #fff;
            background-color: #24292d;
            border-color: #24292d;
        }
        .btn-dark:hover {
            color: #fff;
            background-color: #1f2326;
            border-color: #1d2124;
        }
        .btn-check:focus + .btn-dark, .btn-dark:focus {
            color: #fff;
            background-color: #1f2326;
            border-color: #1d2124;
            -webkit-box-shadow: 0 0 0 0 rgba(69, 73, 77, 0.5);
            box-shadow: 0 0 0 0 rgba(69, 73, 77, 0.5);
        }
        .btn-check:checked + .btn-dark, .btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active, .show > .btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #1d2124;
            border-color: #1b1f22;
        }
        .btn-check:checked + .btn-dark:focus, .btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus, .show > .btn-dark.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(69, 73, 77, 0.5);
            box-shadow: 0 0 0 0 rgba(69, 73, 77, 0.5);
        }
        .btn-dark:disabled, .btn-dark.disabled {
            color: #fff;
            background-color: #24292d;
            border-color: #24292d;
        }

        .btn-orange {
            color: #fff;
            background-color: #fd7e14;
            border-color: #fd7e14;
        }
        .btn-orange:hover {
            color: #fff;
            background-color: #d76b11;
            border-color: #ca6510;
        }
        .btn-check:focus + .btn-orange, .btn-orange:focus {
            color: #fff;
            background-color: #d76b11;
            border-color: #ca6510;
            -webkit-box-shadow: 0 0 0 0 rgba(253, 145, 55, 0.5);
            box-shadow: 0 0 0 0 rgba(253, 145, 55, 0.5);
        }
        .btn-check:checked + .btn-orange, .btn-check:active + .btn-orange, .btn-orange:active, .btn-orange.active, .show > .btn-orange.dropdown-toggle {
            color: #fff;
            background-color: #ca6510;
            border-color: #be5f0f;
        }
        .btn-check:checked + .btn-orange:focus, .btn-check:active + .btn-orange:focus, .btn-orange:active:focus, .btn-orange.active:focus, .show > .btn-orange.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(253, 145, 55, 0.5);
            box-shadow: 0 0 0 0 rgba(253, 145, 55, 0.5);
        }
        .btn-orange:disabled, .btn-orange.disabled {
            color: #fff;
            background-color: #fd7e14;
            border-color: #fd7e14;
        }

        .btn-purple {
            color: #fff;
            background-color: #6f42c1;
            border-color: #6f42c1;
        }
        .btn-purple:hover {
            color: #fff;
            background-color: #5e38a4;
            border-color: #59359a;
        }
        .btn-check:focus + .btn-purple, .btn-purple:focus {
            color: #fff;
            background-color: #5e38a4;
            border-color: #59359a;
            -webkit-box-shadow: 0 0 0 0 rgba(133, 94, 202, 0.5);
            box-shadow: 0 0 0 0 rgba(133, 94, 202, 0.5);
        }
        .btn-check:checked + .btn-purple, .btn-check:active + .btn-purple, .btn-purple:active, .btn-purple.active, .show > .btn-purple.dropdown-toggle {
            color: #fff;
            background-color: #59359a;
            border-color: #533291;
        }
        .btn-check:checked + .btn-purple:focus, .btn-check:active + .btn-purple:focus, .btn-purple:active:focus, .btn-purple.active:focus, .show > .btn-purple.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(133, 94, 202, 0.5);
            box-shadow: 0 0 0 0 rgba(133, 94, 202, 0.5);
        }
        .btn-purple:disabled, .btn-purple.disabled {
            color: #fff;
            background-color: #6f42c1;
            border-color: #6f42c1;
        }

        .btn-blue {
            color: #fff;
            background-color: #1d3b53;
            border-color: #1d3b53;
        }
        .btn-blue:hover {
            color: #fff;
            background-color: #193247;
            border-color: #172f42;
        }
        .btn-check:focus + .btn-blue, .btn-blue:focus {
            color: #fff;
            background-color: #193247;
            border-color: #172f42;
            -webkit-box-shadow: 0 0 0 0 rgba(63, 88, 109, 0.5);
            box-shadow: 0 0 0 0 rgba(63, 88, 109, 0.5);
        }
        .btn-check:checked + .btn-blue, .btn-check:active + .btn-blue, .btn-blue:active, .btn-blue.active, .show > .btn-blue.dropdown-toggle {
            color: #fff;
            background-color: #172f42;
            border-color: #162c3e;
        }
        .btn-check:checked + .btn-blue:focus, .btn-check:active + .btn-blue:focus, .btn-blue:active:focus, .btn-blue.active:focus, .show > .btn-blue.dropdown-toggle:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(63, 88, 109, 0.5);
            box-shadow: 0 0 0 0 rgba(63, 88, 109, 0.5);
        }
        .btn-blue:disabled, .btn-blue.disabled {
            color: #fff;
            background-color: #1d3b53;
            border-color: #1d3b53;
        }

        .btn-outline-primary {
            color: #066ac9;
            border-color: #066ac9;
        }
        .btn-outline-primary:hover {
            color: #fff;
            background-color: #066ac9;
            border-color: #066ac9;
        }
        .btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.5);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.5);
        }
        .btn-check:checked + .btn-outline-primary, .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
            color: #fff;
            background-color: #066ac9;
            border-color: #066ac9;
        }
        .btn-check:checked + .btn-outline-primary:focus, .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.5);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.5);
        }
        .btn-outline-primary:disabled, .btn-outline-primary.disabled {
            color: #066ac9;
            background-color: transparent;
        }

        .btn-outline-white {
            color: #fff;
            border-color: #fff;
        }
        .btn-outline-white:hover {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }
        .btn-check:focus + .btn-outline-white, .btn-outline-white:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
        }
        .btn-check:checked + .btn-outline-white, .btn-check:active + .btn-outline-white, .btn-outline-white:active, .btn-outline-white.active, .btn-outline-white.dropdown-toggle.show {
            color: #000;
            background-color: #fff;
            border-color: #fff;
        }
        .btn-check:checked + .btn-outline-white:focus, .btn-check:active + .btn-outline-white:focus, .btn-outline-white:active:focus, .btn-outline-white.active:focus, .btn-outline-white.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.5);
        }
        .btn-outline-white:disabled, .btn-outline-white.disabled {
            color: #fff;
            background-color: transparent;
        }

        .btn-outline-secondary {
            color: #9a9ea4;
            border-color: #9a9ea4;
        }
        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #9a9ea4;
            border-color: #9a9ea4;
        }
        .btn-check:focus + .btn-outline-secondary, .btn-outline-secondary:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(154, 158, 164, 0.5);
            box-shadow: 0 0 0 0 rgba(154, 158, 164, 0.5);
        }
        .btn-check:checked + .btn-outline-secondary, .btn-check:active + .btn-outline-secondary, .btn-outline-secondary:active, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show {
            color: #fff;
            background-color: #9a9ea4;
            border-color: #9a9ea4;
        }
        .btn-check:checked + .btn-outline-secondary:focus, .btn-check:active + .btn-outline-secondary:focus, .btn-outline-secondary:active:focus, .btn-outline-secondary.active:focus, .btn-outline-secondary.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(154, 158, 164, 0.5);
            box-shadow: 0 0 0 0 rgba(154, 158, 164, 0.5);
        }
        .btn-outline-secondary:disabled, .btn-outline-secondary.disabled {
            color: #9a9ea4;
            background-color: transparent;
        }

        .btn-outline-success {
            color: #0cbc87;
            border-color: #0cbc87;
        }
        .btn-outline-success:hover {
            color: #fff;
            background-color: #0cbc87;
            border-color: #0cbc87;
        }
        .btn-check:focus + .btn-outline-success, .btn-outline-success:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(12, 188, 135, 0.5);
            box-shadow: 0 0 0 0 rgba(12, 188, 135, 0.5);
        }
        .btn-check:checked + .btn-outline-success, .btn-check:active + .btn-outline-success, .btn-outline-success:active, .btn-outline-success.active, .btn-outline-success.dropdown-toggle.show {
            color: #fff;
            background-color: #0cbc87;
            border-color: #0cbc87;
        }
        .btn-check:checked + .btn-outline-success:focus, .btn-check:active + .btn-outline-success:focus, .btn-outline-success:active:focus, .btn-outline-success.active:focus, .btn-outline-success.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(12, 188, 135, 0.5);
            box-shadow: 0 0 0 0 rgba(12, 188, 135, 0.5);
        }
        .btn-outline-success:disabled, .btn-outline-success.disabled {
            color: #0cbc87;
            background-color: transparent;
        }

        .btn-outline-info {
            color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-outline-info:hover {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
            box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
        }
        .btn-check:checked + .btn-outline-info, .btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-check:checked + .btn-outline-info:focus, .btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
            box-shadow: 0 0 0 0 rgba(23, 162, 184, 0.5);
        }
        .btn-outline-info:disabled, .btn-outline-info.disabled {
            color: #17a2b8;
            background-color: transparent;
        }

        .btn-outline-warning {
            color: #f7c32e;
            border-color: #f7c32e;
        }
        .btn-outline-warning:hover {
            color: #000;
            background-color: #f7c32e;
            border-color: #f7c32e;
        }
        .btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(247, 195, 46, 0.5);
            box-shadow: 0 0 0 0 rgba(247, 195, 46, 0.5);
        }
        .btn-check:checked + .btn-outline-warning, .btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
            color: #000;
            background-color: #f7c32e;
            border-color: #f7c32e;
        }
        .btn-check:checked + .btn-outline-warning:focus, .btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(247, 195, 46, 0.5);
            box-shadow: 0 0 0 0 rgba(247, 195, 46, 0.5);
        }
        .btn-outline-warning:disabled, .btn-outline-warning.disabled {
            color: #f7c32e;
            background-color: transparent;
        }

        .btn-outline-danger {
            color: #d6293e;
            border-color: #d6293e;
        }
        .btn-outline-danger:hover {
            color: #fff;
            background-color: #d6293e;
            border-color: #d6293e;
        }
        .btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(214, 41, 62, 0.5);
            box-shadow: 0 0 0 0 rgba(214, 41, 62, 0.5);
        }
        .btn-check:checked + .btn-outline-danger, .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
            color: #fff;
            background-color: #d6293e;
            border-color: #d6293e;
        }
        .btn-check:checked + .btn-outline-danger:focus, .btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(214, 41, 62, 0.5);
            box-shadow: 0 0 0 0 rgba(214, 41, 62, 0.5);
        }
        .btn-outline-danger:disabled, .btn-outline-danger.disabled {
            color: #d6293e;
            background-color: transparent;
        }

        .btn-outline-light {
            color: #f5f7f9;
            border-color: #f5f7f9;
        }
        .btn-outline-light:hover {
            color: #000;
            background-color: #f5f7f9;
            border-color: #f5f7f9;
        }
        .btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(245, 247, 249, 0.5);
            box-shadow: 0 0 0 0 rgba(245, 247, 249, 0.5);
        }
        .btn-check:checked + .btn-outline-light, .btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
            color: #000;
            background-color: #f5f7f9;
            border-color: #f5f7f9;
        }
        .btn-check:checked + .btn-outline-light:focus, .btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(245, 247, 249, 0.5);
            box-shadow: 0 0 0 0 rgba(245, 247, 249, 0.5);
        }
        .btn-outline-light:disabled, .btn-outline-light.disabled {
            color: #f5f7f9;
            background-color: transparent;
        }

        .btn-outline-dark {
            color: #24292d;
            border-color: #24292d;
        }
        .btn-outline-dark:hover {
            color: #fff;
            background-color: #24292d;
            border-color: #24292d;
        }
        .btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(36, 41, 45, 0.5);
            box-shadow: 0 0 0 0 rgba(36, 41, 45, 0.5);
        }
        .btn-check:checked + .btn-outline-dark, .btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
            color: #fff;
            background-color: #24292d;
            border-color: #24292d;
        }
        .btn-check:checked + .btn-outline-dark:focus, .btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(36, 41, 45, 0.5);
            box-shadow: 0 0 0 0 rgba(36, 41, 45, 0.5);
        }
        .btn-outline-dark:disabled, .btn-outline-dark.disabled {
            color: #24292d;
            background-color: transparent;
        }

        .btn-outline-orange {
            color: #fd7e14;
            border-color: #fd7e14;
        }
        .btn-outline-orange:hover {
            color: #fff;
            background-color: #fd7e14;
            border-color: #fd7e14;
        }
        .btn-check:focus + .btn-outline-orange, .btn-outline-orange:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(253, 126, 20, 0.5);
            box-shadow: 0 0 0 0 rgba(253, 126, 20, 0.5);
        }
        .btn-check:checked + .btn-outline-orange, .btn-check:active + .btn-outline-orange, .btn-outline-orange:active, .btn-outline-orange.active, .btn-outline-orange.dropdown-toggle.show {
            color: #fff;
            background-color: #fd7e14;
            border-color: #fd7e14;
        }
        .btn-check:checked + .btn-outline-orange:focus, .btn-check:active + .btn-outline-orange:focus, .btn-outline-orange:active:focus, .btn-outline-orange.active:focus, .btn-outline-orange.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(253, 126, 20, 0.5);
            box-shadow: 0 0 0 0 rgba(253, 126, 20, 0.5);
        }
        .btn-outline-orange:disabled, .btn-outline-orange.disabled {
            color: #fd7e14;
            background-color: transparent;
        }

        .btn-outline-purple {
            color: #6f42c1;
            border-color: #6f42c1;
        }
        .btn-outline-purple:hover {
            color: #fff;
            background-color: #6f42c1;
            border-color: #6f42c1;
        }
        .btn-check:focus + .btn-outline-purple, .btn-outline-purple:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(111, 66, 193, 0.5);
            box-shadow: 0 0 0 0 rgba(111, 66, 193, 0.5);
        }
        .btn-check:checked + .btn-outline-purple, .btn-check:active + .btn-outline-purple, .btn-outline-purple:active, .btn-outline-purple.active, .btn-outline-purple.dropdown-toggle.show {
            color: #fff;
            background-color: #6f42c1;
            border-color: #6f42c1;
        }
        .btn-check:checked + .btn-outline-purple:focus, .btn-check:active + .btn-outline-purple:focus, .btn-outline-purple:active:focus, .btn-outline-purple.active:focus, .btn-outline-purple.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(111, 66, 193, 0.5);
            box-shadow: 0 0 0 0 rgba(111, 66, 193, 0.5);
        }
        .btn-outline-purple:disabled, .btn-outline-purple.disabled {
            color: #6f42c1;
            background-color: transparent;
        }

        .btn-outline-blue {
            color: #1d3b53;
            border-color: #1d3b53;
        }
        .btn-outline-blue:hover {
            color: #fff;
            background-color: #1d3b53;
            border-color: #1d3b53;
        }
        .btn-check:focus + .btn-outline-blue, .btn-outline-blue:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(29, 59, 83, 0.5);
            box-shadow: 0 0 0 0 rgba(29, 59, 83, 0.5);
        }
        .btn-check:checked + .btn-outline-blue, .btn-check:active + .btn-outline-blue, .btn-outline-blue:active, .btn-outline-blue.active, .btn-outline-blue.dropdown-toggle.show {
            color: #fff;
            background-color: #1d3b53;
            border-color: #1d3b53;
        }
        .btn-check:checked + .btn-outline-blue:focus, .btn-check:active + .btn-outline-blue:focus, .btn-outline-blue:active:focus, .btn-outline-blue.active:focus, .btn-outline-blue.dropdown-toggle.show:focus {
            -webkit-box-shadow: 0 0 0 0 rgba(29, 59, 83, 0.5);
            box-shadow: 0 0 0 0 rgba(29, 59, 83, 0.5);
        }
        .btn-outline-blue:disabled, .btn-outline-blue.disabled {
            color: #1d3b53;
            background-color: transparent;
        }

        .btn-link {
            font-weight: 500;
            color: #066ac9;
            text-decoration: none;
        }
        .btn-link:hover {
            color: #0555a1;
        }
        .btn-link:disabled, .btn-link.disabled {
            color: #cfd3d7;
        }

        .btn-lg, .btn-group-lg > .btn {
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.5rem;
        }

        .btn-sm, .btn-group-sm > .btn {
            padding: 0.4rem 0.8rem;
            font-size: 0.8125rem;
            border-radius: 0.2rem;
        }

        .fade {
            -webkit-transition: opacity 0.15s linear;
            transition: opacity 0.15s linear;
        }
        @media (prefers-reduced-motion: reduce) {
            .fade {
                -webkit-transition: none;
                transition: none;
            }
        }
        .fade:not(.show) {
            opacity: 0;
        }

        .collapse:not(.show) {
            display: none;
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            -webkit-transition: height 0.35s ease;
            transition: height 0.35s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .collapsing {
                -webkit-transition: none;
                transition: none;
            }
        }
        .collapsing.collapse-horizontal {
            width: 0;
            height: auto;
            -webkit-transition: width 0.35s ease;
            transition: width 0.35s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .collapsing.collapse-horizontal {
                -webkit-transition: none;
                transition: none;
            }
        }

        .dropup,
        .dropend,
        .dropdown,
        .dropstart {
            position: relative;
        }

        .dropdown-toggle {
            white-space: nowrap;
        }
        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid;
            border-right: 0.3em solid transparent;
            border-bottom: 0;
            border-left: 0.3em solid transparent;
        }
        .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropdown-menu {
            position: absolute;
            z-index: 1000;
            display: none;
            min-width: 15rem;
            padding: 1rem 0.8rem;
            margin: 0;
            font-size: 0.9375rem;
            color: #747579;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 0 solid rgba(0, 0, 0, 0.1);
            border-radius: 0.325rem;
        }
        .dropdown-menu[data-bs-popper] {
            top: 100%;
            left: 0;
            margin-top: 0;
        }

        .dropdown-menu-start {
            --bs-position: start;
        }
        .dropdown-menu-start[data-bs-popper] {
            right: auto;
            left: 0;
        }

        .dropdown-menu-end {
            --bs-position: end;
        }
        .dropdown-menu-end[data-bs-popper] {
            right: 0;
            left: auto;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-start {
                --bs-position: start;
            }
            .dropdown-menu-sm-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-sm-end {
                --bs-position: end;
            }
            .dropdown-menu-sm-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        @media (min-width: 768px) {
            .dropdown-menu-md-start {
                --bs-position: start;
            }
            .dropdown-menu-md-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-md-end {
                --bs-position: end;
            }
            .dropdown-menu-md-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        @media (min-width: 992px) {
            .dropdown-menu-lg-start {
                --bs-position: start;
            }
            .dropdown-menu-lg-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-lg-end {
                --bs-position: end;
            }
            .dropdown-menu-lg-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        @media (min-width: 1200px) {
            .dropdown-menu-xl-start {
                --bs-position: start;
            }
            .dropdown-menu-xl-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xl-end {
                --bs-position: end;
            }
            .dropdown-menu-xl-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        @media (min-width: 1400px) {
            .dropdown-menu-xxl-start {
                --bs-position: start;
            }
            .dropdown-menu-xxl-start[data-bs-popper] {
                right: auto;
                left: 0;
            }

            .dropdown-menu-xxl-end {
                --bs-position: end;
            }
            .dropdown-menu-xxl-end[data-bs-popper] {
                right: 0;
                left: auto;
            }
        }
        .dropup .dropdown-menu[data-bs-popper] {
            top: auto;
            bottom: 100%;
            margin-top: 0;
            margin-bottom: 0;
        }
        .dropup .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0;
            border-right: 0.3em solid transparent;
            border-bottom: 0.3em solid;
            border-left: 0.3em solid transparent;
        }
        .dropup .dropdown-toggle:empty::after {
            margin-left: 0;
        }

        .dropend .dropdown-menu[data-bs-popper] {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
            margin-left: 0;
        }
        .dropend .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0;
            border-bottom: 0.3em solid transparent;
            border-left: 0.3em solid;
        }
        .dropend .dropdown-toggle:empty::after {
            margin-left: 0;
        }
        .dropend .dropdown-toggle::after {
            vertical-align: 0;
        }

        .dropstart .dropdown-menu[data-bs-popper] {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0;
            margin-right: 0;
        }
        .dropstart .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0.255em;
            content: "";
        }
        .dropstart .dropdown-toggle::after {
            display: none;
        }
        .dropstart .dropdown-toggle::before {
            display: inline-block;
            margin-right: 0.255em;
            vertical-align: 0.255em;
            content: "";
            border-top: 0.3em solid transparent;
            border-right: 0.3em solid;
            border-bottom: 0.3em solid transparent;
        }
        .dropstart .dropdown-toggle:empty::after {
            margin-left: 0;
        }
        .dropstart .dropdown-toggle::before {
            vertical-align: 0;
        }

        .dropdown-divider {
            height: 0;
            margin: 0.5rem 0;
            overflow: hidden;
            border-top: 1px solid #9a9ea4;
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 0.4rem 1rem;
            clear: both;
            font-weight: 500;
            color: #747579;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
        }
        .dropdown-item:hover, .dropdown-item:focus {
            color: #066ac9;
            background-color: rgba(6, 106, 201, 0.1);
        }
        .dropdown-item.active, .dropdown-item:active {
            color: #066ac9;
            text-decoration: none;
            background-color: rgba(6, 106, 201, 0.1);
        }
        .dropdown-item.disabled, .dropdown-item:disabled {
            color: #747579;
            pointer-events: none;
            background-color: transparent;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-header {
            display: block;
            padding: 1rem 1rem;
            margin-bottom: 0;
            font-size: 0.8203125rem;
            color: #24292d;
            white-space: nowrap;
        }

        .dropdown-item-text {
            display: block;
            padding: 0.4rem 1rem;
            color: #747579;
        }

        .dropdown-menu-dark {
            color: #dde0e3;
            background-color: #24292d;
            border-color: rgba(0, 0, 0, 0.1);
        }
        .dropdown-menu-dark .dropdown-item {
            color: #dde0e3;
        }
        .dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
            color: #fff;
            background-color: rgba(6, 106, 201, 0.1);
        }
        .dropdown-menu-dark .dropdown-item.active, .dropdown-menu-dark .dropdown-item:active {
            color: #066ac9;
            background-color: rgba(6, 106, 201, 0.1);
        }
        .dropdown-menu-dark .dropdown-item.disabled, .dropdown-menu-dark .dropdown-item:disabled {
            color: #9a9ea4;
        }
        .dropdown-menu-dark .dropdown-divider {
            border-color: rgba(255, 255, 255, 0.1);
        }
        .dropdown-menu-dark .dropdown-item-text {
            color: #dde0e3;
        }
        .dropdown-menu-dark .dropdown-header {
            color: #9a9ea4;
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            vertical-align: middle;
        }
        .btn-group > .btn,
        .btn-group-vertical > .btn {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
        }
        .btn-group > .btn-check:checked + .btn,
        .btn-group > .btn-check:focus + .btn,
        .btn-group > .btn:hover,
        .btn-group > .btn:focus,
        .btn-group > .btn:active,
        .btn-group > .btn.active,
        .btn-group-vertical > .btn-check:checked + .btn,
        .btn-group-vertical > .btn-check:focus + .btn,
        .btn-group-vertical > .btn:hover,
        .btn-group-vertical > .btn:focus,
        .btn-group-vertical > .btn:active,
        .btn-group-vertical > .btn.active {
            z-index: 1;
        }

        .btn-toolbar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .btn-toolbar .input-group {
            width: auto;
        }

        .btn-group > .btn:not(:first-child),
        .btn-group > .btn-group:not(:first-child) {
            margin-left: -1px;
        }
        .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
        .btn-group > .btn-group:not(:last-child) > .btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .btn-group > .btn:nth-child(n+3),
        .btn-group > :not(.btn-check) + .btn,
        .btn-group > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .dropdown-toggle-split {
            padding-right: 0.75rem;
            padding-left: 0.75rem;
        }
        .dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
            margin-left: 0;
        }
        .dropstart .dropdown-toggle-split::before {
            margin-right: 0;
        }

        .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
            padding-right: 0.6rem;
            padding-left: 0.6rem;
        }

        .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
            padding-right: 1.125rem;
            padding-left: 1.125rem;
        }

        .btn-group-vertical {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        .btn-group-vertical > .btn,
        .btn-group-vertical > .btn-group {
            width: 100%;
        }
        .btn-group-vertical > .btn:not(:first-child),
        .btn-group-vertical > .btn-group:not(:first-child) {
            margin-top: -1px;
        }
        .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
        .btn-group-vertical > .btn-group:not(:last-child) > .btn {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .btn-group-vertical > .btn ~ .btn,
        .btn-group-vertical > .btn-group:not(:first-child) > .btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }

        .nav-link {
            display: block;
            padding: 0.25rem 0.75rem;
            color: #747579;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .nav-link {
                -webkit-transition: none;
                transition: none;
            }
        }
        .nav-link:hover, .nav-link:focus {
            color: #0555a1;
        }
        .nav-link.disabled {
            color: #9a9ea4 !important;
            pointer-events: none;
            cursor: default;
        }

        .nav-tabs {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        .nav-tabs .nav-link {
            margin-bottom: -1px;
            background: none;
            border: 1px solid transparent;
            border-top-left-radius: 0.325rem;
            border-top-right-radius: 0.325rem;
        }
        .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
            border-color: #eff1f2 #eff1f2 rgba(0, 0, 0, 0.1);
            isolation: isolate;
        }
        .nav-tabs .nav-link.disabled {
            color: #9a9ea4 !important;
            background-color: transparent;
            border-color: transparent;
        }
        .nav-tabs .nav-link.active,
        .nav-tabs .nav-item.show .nav-link {
            color: #404448;
            background-color: #fff;
            border-color: #dde0e3 #dde0e3 #fff;
        }
        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .nav-pills .nav-link {
            background: none;
            border: 0;
            border-radius: 0.325rem;
        }
        .nav-pills .nav-link.active,
        .nav-pills .show > .nav-link {
            color: #fff;
            background-color: #066ac9;
        }

        .nav-fill > .nav-link,
        .nav-fill .nav-item {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            text-align: center;
        }

        .nav-justified > .nav-link,
        .nav-justified .nav-item {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            text-align: center;
        }

        .nav-fill .nav-item .nav-link,
        .nav-justified .nav-item .nav-link {
            width: 100%;
        }

        .tab-content > .tab-pane {
            display: none;
        }
        .tab-content > .active {
            display: block;
        }

        .navbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
        }
        .navbar > .container,
        .navbar > .container-fluid,
        .navbar > .container-sm,
        .navbar > .container-md,
        .navbar > .container-lg,
        .navbar > .container-xl,
        .navbar > .container-xxl {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: inherit;
            flex-wrap: inherit;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        .navbar-brand {
            padding-top: 30px;
            padding-bottom: 30px;
            margin-right: 1rem;
            font-size: 1.25rem;
            white-space: nowrap;
        }
        .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }
        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0;
        }
        .navbar-nav .dropdown-menu {
            position: static;
        }

        .navbar-text {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }

        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .navbar-toggler {
            padding: 0.25rem 0;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: 0.25rem;
            -webkit-transition: -webkit-box-shadow 0.15s ease-in-out;
            transition: -webkit-box-shadow 0.15s ease-in-out;
            transition: box-shadow 0.15s ease-in-out;
            transition: box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .navbar-toggler {
                -webkit-transition: none;
                transition: none;
            }
        }
        .navbar-toggler:hover {
            text-decoration: none;
        }
        .navbar-toggler:focus {
            text-decoration: none;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0;
            box-shadow: 0 0 0 0;
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .navbar-nav-scroll {
            max-height: var(--bs-scroll-height, 75vh);
            overflow-y: auto;
        }

        @media (min-width: 576px) {
            .navbar-expand-sm {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-sm .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: 1rem;
                padding-left: 1rem;
            }
            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-sm .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-sm .navbar-toggler {
                display: none;
            }
            .navbar-expand-sm .offcanvas-header {
                display: none;
            }
            .navbar-expand-sm .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                -webkit-transition: none;
                transition: none;
                -webkit-transform: none;
                transform: none;
            }
            .navbar-expand-sm .offcanvas-top,
            .navbar-expand-sm .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }
            .navbar-expand-sm .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        @media (min-width: 768px) {
            .navbar-expand-md {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-md .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: 1rem;
                padding-left: 1rem;
            }
            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-md .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-md .navbar-toggler {
                display: none;
            }
            .navbar-expand-md .offcanvas-header {
                display: none;
            }
            .navbar-expand-md .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                -webkit-transition: none;
                transition: none;
                -webkit-transform: none;
                transform: none;
            }
            .navbar-expand-md .offcanvas-top,
            .navbar-expand-md .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }
            .navbar-expand-md .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        @media (min-width: 992px) {
            .navbar-expand-lg {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-lg .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1rem;
                padding-left: 1rem;
            }
            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-lg .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-lg .navbar-toggler {
                display: none;
            }
            .navbar-expand-lg .offcanvas-header {
                display: none;
            }
            .navbar-expand-lg .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                -webkit-transition: none;
                transition: none;
                -webkit-transform: none;
                transform: none;
            }
            .navbar-expand-lg .offcanvas-top,
            .navbar-expand-lg .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }
            .navbar-expand-lg .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        @media (min-width: 1200px) {
            .navbar-expand-xl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-xl .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: 1rem;
                padding-left: 1rem;
            }
            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-xl .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-xl .navbar-toggler {
                display: none;
            }
            .navbar-expand-xl .offcanvas-header {
                display: none;
            }
            .navbar-expand-xl .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                -webkit-transition: none;
                transition: none;
                -webkit-transform: none;
                transform: none;
            }
            .navbar-expand-xl .offcanvas-top,
            .navbar-expand-xl .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }
            .navbar-expand-xl .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        @media (min-width: 1400px) {
            .navbar-expand-xxl {
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }
            .navbar-expand-xxl .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                position: absolute;
            }
            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-right: 1rem;
                padding-left: 1rem;
            }
            .navbar-expand-xxl .navbar-nav-scroll {
                overflow: visible;
            }
            .navbar-expand-xxl .navbar-collapse {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
            .navbar-expand-xxl .navbar-toggler {
                display: none;
            }
            .navbar-expand-xxl .offcanvas-header {
                display: none;
            }
            .navbar-expand-xxl .offcanvas {
                position: inherit;
                bottom: 0;
                z-index: 1000;
                -webkit-box-flex: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                visibility: visible !important;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                -webkit-transition: none;
                transition: none;
                -webkit-transform: none;
                transform: none;
            }
            .navbar-expand-xxl .offcanvas-top,
            .navbar-expand-xxl .offcanvas-bottom {
                height: auto;
                border-top: 0;
                border-bottom: 0;
            }
            .navbar-expand-xxl .offcanvas-body {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-flex: 0;
                -ms-flex-positive: 0;
                flex-grow: 0;
                padding: 0;
                overflow-y: visible;
            }
        }
        .navbar-expand {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .navbar-expand .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute;
        }
        .navbar-expand .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 1rem;
        }
        .navbar-expand .navbar-nav-scroll {
            overflow: visible;
        }
        .navbar-expand .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
        .navbar-expand .navbar-toggler {
            display: none;
        }
        .navbar-expand .offcanvas-header {
            display: none;
        }
        .navbar-expand .offcanvas {
            position: inherit;
            bottom: 0;
            z-index: 1000;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            visibility: visible !important;
            background-color: transparent;
            border-right: 0;
            border-left: 0;
            -webkit-transition: none;
            transition: none;
            -webkit-transform: none;
            transform: none;
        }
        .navbar-expand .offcanvas-top,
        .navbar-expand .offcanvas-bottom {
            height: auto;
            border-top: 0;
            border-bottom: 0;
        }
        .navbar-expand .offcanvas-body {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            padding: 0;
            overflow-y: visible;
        }

        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
        }
        .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
            color: rgba(0, 0, 0, 0.9);
        }
        .navbar-light .navbar-nav .nav-link {
            color: #747579;
        }
        .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
            color: #066ac9;
        }
        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, 0.3);
        }
        .navbar-light .navbar-nav .show > .nav-link,
        .navbar-light .navbar-nav .nav-link.active {
            color: #066ac9;
        }
        .navbar-light .navbar-toggler {
            color: #747579;
            border-color: rgba(0, 0, 0, 0.1);
        }
        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        .navbar-light .navbar-text {
            color: #747579;
        }
        .navbar-light .navbar-text a,
        .navbar-light .navbar-text a:hover,
        .navbar-light .navbar-text a:focus {
            color: #066ac9;
        }

        .navbar-dark .navbar-brand {
            color: #fff;
        }
        .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
            color: #fff;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
            color: #066ac9 !important;
        }
        .navbar-dark .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.25);
        }
        .navbar-dark .navbar-nav .show > .nav-link,
        .navbar-dark .navbar-nav .nav-link.active {
            color: #066ac9 !important;
        }
        .navbar-dark .navbar-toggler {
            color: #fff;
            border-color: rgba(255, 255, 255, 0.1);
        }
        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='%23ffffff' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        .navbar-dark .navbar-text {
            color: #fff;
        }
        .navbar-dark .navbar-text a,
        .navbar-dark .navbar-text a:hover,
        .navbar-dark .navbar-text a:focus {
            color: #066ac9 !important;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
        }
        .card > hr {
            margin-right: 0;
            margin-left: 0;
        }
        .card > .list-group {
            border-top: inherit;
            border-bottom: inherit;
        }
        .card > .list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
        .card > .list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }
        .card > .card-header + .list-group,
        .card > .list-group + .card-footer {
            border-top: 0;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem 1.25rem;
        }

        .card-title {
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            margin-top: -0.25rem;
            margin-bottom: 0;
        }

        .card-text:last-child {
            margin-bottom: 0;
        }

        .card-link + .card-link {
            margin-left: 1.25rem;
        }

        .card-header {
            padding: 1rem 1rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 0 solid rgba(0, 0, 0, 0.1);
        }
        .card-header:first-child {
            border-radius: 0.5rem 0.5rem 0 0;
        }

        .card-footer {
            padding: 1rem 1rem;
            background-color: #fff;
            border-top: 0 solid rgba(0, 0, 0, 0.1);
        }
        .card-footer:last-child {
            border-radius: 0 0 0.5rem 0.5rem;
        }

        .card-header-tabs {
            margin-right: -0.5rem;
            margin-bottom: -1rem;
            margin-left: -0.5rem;
            border-bottom: 0;
        }

        .card-header-pills {
            margin-right: -0.5rem;
            margin-left: -0.5rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1.25rem;
            border-radius: 0.5rem;
        }

        .card-img,
        .card-img-top,
        .card-img-bottom {
            width: 100%;
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        .card-group > .card {
            margin-bottom: 0.9375rem;
        }
        @media (min-width: 576px) {
            .card-group {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }
            .card-group > .card {
                -webkit-box-flex: 1;
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0;
            }
            .card-group > .card + .card {
                margin-left: 0;
                border-left: 0;
            }
            .card-group > .card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            .card-group > .card:not(:last-child) .card-img-top,
            .card-group > .card:not(:last-child) .card-header {
                border-top-right-radius: 0;
            }
            .card-group > .card:not(:last-child) .card-img-bottom,
            .card-group > .card:not(:last-child) .card-footer {
                border-bottom-right-radius: 0;
            }
            .card-group > .card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
            }
            .card-group > .card:not(:first-child) .card-img-top,
            .card-group > .card:not(:first-child) .card-header {
                border-top-left-radius: 0;
            }
            .card-group > .card:not(:first-child) .card-img-bottom,
            .card-group > .card:not(:first-child) .card-footer {
                border-bottom-left-radius: 0;
            }
        }

        .accordion-button {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            padding: 1rem 1.25rem;
            font-size: 0.9375rem;
            color: #212529;
            text-align: left;
            background-color: #fff;
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .accordion-button {
                -webkit-transition: none;
                transition: none;
            }
        }
        .accordion-button:not(.collapsed) {
            color: #055fb5;
            background-color: #e6f0fa;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
        }
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23055fb5'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }
        .accordion-button::after {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 1.25rem;
            height: 1.25rem;
            margin-left: auto;
            content: "";
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-size: 1.25rem;
            -webkit-transition: -webkit-transform 0.2s ease-in-out;
            transition: -webkit-transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .accordion-button::after {
                -webkit-transition: none;
                transition: none;
            }
        }
        .accordion-button:hover {
            z-index: 2;
        }
        .accordion-button:focus {
            z-index: 3;
            border-color: none;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
        }

        .accordion-header {
            margin-bottom: 0;
        }

        .accordion-item {
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }
        .accordion-item:first-of-type {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }
        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }
        .accordion-item:not(:first-of-type) {
            border-top: 0;
        }
        .accordion-item:last-of-type {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }
        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: calc(0.25rem - 1px);
            border-bottom-left-radius: calc(0.25rem - 1px);
        }
        .accordion-item:last-of-type .accordion-collapse {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }

        .accordion-body {
            padding: 1rem 1.25rem;
        }

        .accordion-flush .accordion-collapse {
            border-width: 0;
        }
        .accordion-flush .accordion-item {
            border-right: 0;
            border-left: 0;
            border-radius: 0;
        }
        .accordion-flush .accordion-item:first-child {
            border-top: 0;
        }
        .accordion-flush .accordion-item:last-child {
            border-bottom: 0;
        }
        .accordion-flush .accordion-item .accordion-button {
            border-radius: 0;
        }

        .breadcrumb {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.5rem 0;
            margin-bottom: 1rem;
            font-size: 0.8125rem;
            list-style: none;
            background-color: transparent;
        }

        .breadcrumb-item + .breadcrumb-item {
            padding-left: 0.8rem;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            float: left;
            padding-right: 0.8rem;
            color: #9a9ea4;
            content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */;
        }
        .breadcrumb-item.active {
            color: #9a9ea4;
        }

        .pagination {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
        }

        .page-link {
            position: relative;
            display: block;
            color: #747579;
            background-color: #fff;
            border: 1px solid #dde0e3;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .page-link {
                -webkit-transition: none;
                transition: none;
            }
        }
        .page-link:hover {
            z-index: 2;
            color: #fff;
            background-color: #066ac9;
            border-color: #066ac9;
        }
        .page-link:focus {
            z-index: 3;
            color: #0555a1;
            background-color: #eff1f2;
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
        }

        .page-item:not(:first-child) .page-link {
            margin-left: -1px;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #066ac9;
            border-color: #066ac9;
        }
        .page-item.disabled .page-link {
            color: #cfd3d7;
            pointer-events: none;
            background-color: #fff;
            border-color: #dde0e3;
        }

        .page-link {
            padding: 0.7rem 1rem;
        }

        .page-item:first-child .page-link {
            border-top-left-radius: 0.325rem;
            border-bottom-left-radius: 0.325rem;
        }
        .page-item:last-child .page-link {
            border-top-right-radius: 0.325rem;
            border-bottom-right-radius: 0.325rem;
        }

        .pagination-lg .page-link {
            padding: 0.75rem 1.5rem;
            font-size: 1.171875rem;
        }
        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: 0.3rem;
            border-bottom-left-radius: 0.3rem;
        }
        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: 0.3rem;
            border-bottom-right-radius: 0.3rem;
        }

        .pagination-sm .page-link {
            padding: 0.25rem 0.5rem;
            font-size: 0.8203125rem;
        }
        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: 0.2rem;
            border-bottom-left-radius: 0.2rem;
        }
        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: 0.2rem;
            border-bottom-right-radius: 0.2rem;
        }

        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.85em;
            font-weight: 400;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25rem;
        }
        .badge:empty {
            display: none;
        }

        .btn .badge {
            position: relative;
            top: -1px;
        }

        .alert {
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-heading {
            color: inherit;
        }

        .alert-link {
            font-weight: 700;
        }

        .alert-dismissible {
            padding-right: 3rem;
        }
        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: 1.25rem 1rem;
        }

        .alert-primary {
            color: #044079;
            background-color: #cde1f4;
            border-color: #b4d2ef;
        }
        .alert-primary .alert-link {
            color: #033361;
        }

        .alert-white {
            color: #999999;
            background-color: white;
            border-color: white;
        }
        .alert-white .alert-link {
            color: #7a7a7a;
        }

        .alert-secondary {
            color: #5c5f62;
            background-color: #ebeced;
            border-color: #e1e2e4;
        }
        .alert-secondary .alert-link {
            color: #4a4c4e;
        }

        .alert-success {
            color: #077151;
            background-color: #cef2e7;
            border-color: #b6ebdb;
        }
        .alert-success .alert-link {
            color: #065a41;
        }

        .alert-info {
            color: #0e616e;
            background-color: #d1ecf1;
            border-color: #b9e3ea;
        }
        .alert-info .alert-link {
            color: #0b4e58;
        }

        .alert-warning {
            color: #94751c;
            background-color: #fdf3d5;
            border-color: #fdedc0;
        }
        .alert-warning .alert-link {
            color: #765e16;
        }

        .alert-danger {
            color: #801925;
            background-color: #f7d4d8;
            border-color: #f3bfc5;
        }
        .alert-danger .alert-link {
            color: #66141e;
        }

        .alert-light {
            color: #939495;
            background-color: #fdfdfe;
            border-color: #fcfdfd;
        }
        .alert-light .alert-link {
            color: #767677;
        }

        .alert-dark {
            color: #16191b;
            background-color: #d3d4d5;
            border-color: #bdbfc0;
        }
        .alert-dark .alert-link {
            color: #121416;
        }

        .alert-orange {
            color: #984c0c;
            background-color: #ffe5d0;
            border-color: #fed8b9;
        }
        .alert-orange .alert-link {
            color: #7a3d0a;
        }

        .alert-purple {
            color: #432874;
            background-color: #e2d9f3;
            border-color: #d4c6ec;
        }
        .alert-purple .alert-link {
            color: #36205d;
        }

        .alert-blue {
            color: #112332;
            background-color: #d2d8dd;
            border-color: #bbc4cb;
        }
        .alert-blue .alert-link {
            color: #0e1c28;
        }

        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem;
            }
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem;
            }
        }
        .progress {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            height: 1rem;
            overflow: hidden;
            font-size: 0.75rem;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 0.25rem;
        }

        .progress-bar {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: hidden;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            background-color: #0d6efd;
            -webkit-transition: width 0.6s ease;
            transition: width 0.6s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .progress-bar {
                -webkit-transition: none;
                transition: none;
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
            background-size: 1rem 1rem;
        }

        .progress-bar-animated {
            -webkit-animation: 1s linear infinite progress-bar-stripes;
            animation: 1s linear infinite progress-bar-stripes;
        }
        @media (prefers-reduced-motion: reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none;
            }
        }

        .list-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: 0.325rem;
        }

        .list-group-numbered {
            list-style-type: none;
            counter-reset: section;
        }
        .list-group-numbered > li::before {
            content: counters(section, ".") ". ";
            counter-increment: section;
        }

        .list-group-item-action {
            width: 100%;
            color: #495057;
            text-align: inherit;
        }
        .list-group-item-action:hover, .list-group-item-action:focus {
            z-index: 1;
            color: #495057;
            text-decoration: none;
            background-color: rgba(6, 106, 201, 0.1);
        }
        .list-group-item-action:active {
            color: #212529;
            background-color: rgba(6, 106, 201, 0.1);
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 0.5rem 1rem;
            color: #747579;
            background-color: transparent;
            border: 1px solid rgba(0, 0, 0, 0.125);
        }
        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit;
        }
        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit;
        }
        .list-group-item.disabled, .list-group-item:disabled {
            color: #6c757d;
            pointer-events: none;
            background-color: #fff;
        }
        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #066ac9;
            border-color: #066ac9;
        }
        .list-group-item + .list-group-item {
            border-top-width: 0;
        }
        .list-group-item + .list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px;
        }

        .list-group-horizontal {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        .list-group-horizontal > .list-group-item:first-child {
            border-bottom-left-radius: 0.325rem;
            border-top-right-radius: 0;
        }
        .list-group-horizontal > .list-group-item:last-child {
            border-top-right-radius: 0.325rem;
            border-bottom-left-radius: 0;
        }
        .list-group-horizontal > .list-group-item.active {
            margin-top: 0;
        }
        .list-group-horizontal > .list-group-item + .list-group-item {
            border-top-width: 1px;
            border-left-width: 0;
        }
        .list-group-horizontal > .list-group-item + .list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px;
        }

        @media (min-width: 576px) {
            .list-group-horizontal-sm {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-sm > .list-group-item:first-child {
                border-bottom-left-radius: 0.325rem;
                border-top-right-radius: 0;
            }
            .list-group-horizontal-sm > .list-group-item:last-child {
                border-top-right-radius: 0.325rem;
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-sm > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-sm > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }
            .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }
        @media (min-width: 768px) {
            .list-group-horizontal-md {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-md > .list-group-item:first-child {
                border-bottom-left-radius: 0.325rem;
                border-top-right-radius: 0;
            }
            .list-group-horizontal-md > .list-group-item:last-child {
                border-top-right-radius: 0.325rem;
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-md > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-md > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }
            .list-group-horizontal-md > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }
        @media (min-width: 992px) {
            .list-group-horizontal-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-lg > .list-group-item:first-child {
                border-bottom-left-radius: 0.325rem;
                border-top-right-radius: 0;
            }
            .list-group-horizontal-lg > .list-group-item:last-child {
                border-top-right-radius: 0.325rem;
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-lg > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-lg > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }
            .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }
        @media (min-width: 1200px) {
            .list-group-horizontal-xl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-xl > .list-group-item:first-child {
                border-bottom-left-radius: 0.325rem;
                border-top-right-radius: 0;
            }
            .list-group-horizontal-xl > .list-group-item:last-child {
                border-top-right-radius: 0.325rem;
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-xl > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-xl > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }
            .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }
        @media (min-width: 1400px) {
            .list-group-horizontal-xxl {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
            }
            .list-group-horizontal-xxl > .list-group-item:first-child {
                border-bottom-left-radius: 0.325rem;
                border-top-right-radius: 0;
            }
            .list-group-horizontal-xxl > .list-group-item:last-child {
                border-top-right-radius: 0.325rem;
                border-bottom-left-radius: 0;
            }
            .list-group-horizontal-xxl > .list-group-item.active {
                margin-top: 0;
            }
            .list-group-horizontal-xxl > .list-group-item + .list-group-item {
                border-top-width: 1px;
                border-left-width: 0;
            }
            .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px;
            }
        }
        .list-group-flush {
            border-radius: 0;
        }
        .list-group-flush > .list-group-item {
            border-width: 0 0 1px;
        }
        .list-group-flush > .list-group-item:last-child {
            border-bottom-width: 0;
        }

        .list-group-item-primary {
            color: #044079;
            background-color: #cde1f4;
        }
        .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
            color: #044079;
            background-color: #b9cbdc;
        }
        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #044079;
            border-color: #044079;
        }

        .list-group-item-white {
            color: #999999;
            background-color: white;
        }
        .list-group-item-white.list-group-item-action:hover, .list-group-item-white.list-group-item-action:focus {
            color: #999999;
            background-color: #e6e6e6;
        }
        .list-group-item-white.list-group-item-action.active {
            color: #fff;
            background-color: #999999;
            border-color: #999999;
        }

        .list-group-item-secondary {
            color: #5c5f62;
            background-color: #ebeced;
        }
        .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
            color: #5c5f62;
            background-color: #d4d4d5;
        }
        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #5c5f62;
            border-color: #5c5f62;
        }

        .list-group-item-success {
            color: #077151;
            background-color: #cef2e7;
        }
        .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
            color: #077151;
            background-color: #b9dad0;
        }
        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #077151;
            border-color: #077151;
        }

        .list-group-item-info {
            color: #0e616e;
            background-color: #d1ecf1;
        }
        .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
            color: #0e616e;
            background-color: #bcd4d9;
        }
        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #0e616e;
            border-color: #0e616e;
        }

        .list-group-item-warning {
            color: #94751c;
            background-color: #fdf3d5;
        }
        .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
            color: #94751c;
            background-color: #e4dbc0;
        }
        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #94751c;
            border-color: #94751c;
        }

        .list-group-item-danger {
            color: #801925;
            background-color: #f7d4d8;
        }
        .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
            color: #801925;
            background-color: #debfc2;
        }
        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #801925;
            border-color: #801925;
        }

        .list-group-item-light {
            color: #939495;
            background-color: #fdfdfe;
        }
        .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
            color: #939495;
            background-color: #e4e4e5;
        }
        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #939495;
            border-color: #939495;
        }

        .list-group-item-dark {
            color: #16191b;
            background-color: #d3d4d5;
        }
        .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
            color: #16191b;
            background-color: #bebfc0;
        }
        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #16191b;
            border-color: #16191b;
        }

        .list-group-item-orange {
            color: #984c0c;
            background-color: #ffe5d0;
        }
        .list-group-item-orange.list-group-item-action:hover, .list-group-item-orange.list-group-item-action:focus {
            color: #984c0c;
            background-color: #e6cebb;
        }
        .list-group-item-orange.list-group-item-action.active {
            color: #fff;
            background-color: #984c0c;
            border-color: #984c0c;
        }

        .list-group-item-purple {
            color: #432874;
            background-color: #e2d9f3;
        }
        .list-group-item-purple.list-group-item-action:hover, .list-group-item-purple.list-group-item-action:focus {
            color: #432874;
            background-color: #cbc3db;
        }
        .list-group-item-purple.list-group-item-action.active {
            color: #fff;
            background-color: #432874;
            border-color: #432874;
        }

        .list-group-item-blue {
            color: #112332;
            background-color: #d2d8dd;
        }
        .list-group-item-blue.list-group-item-action:hover, .list-group-item-blue.list-group-item-action:focus {
            color: #112332;
            background-color: #bdc2c7;
        }
        .list-group-item-blue.list-group-item-action.active {
            color: #fff;
            background-color: #112332;
            border-color: #112332;
        }

        .btn-close {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: 0.25em 0.25em;
            color: #000;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            border-radius: 0.325rem;
            opacity: 0.5;
        }
        .btn-close:hover {
            color: #000;
            text-decoration: none;
            opacity: 0.75;
        }
        .btn-close:focus {
            outline: 0;
            -webkit-box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
            box-shadow: 0 0 0 0 rgba(6, 106, 201, 0.25);
            opacity: 1;
        }
        .btn-close:disabled, .btn-close.disabled {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 0.25;
        }

        .btn-close-white {
            -webkit-filter: invert(1) grayscale(100%) brightness(200%);
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        .toast {
            width: 350px;
            max-width: 100%;
            font-size: 0.875rem;
            pointer-events: auto;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border-radius: 0.25rem;
        }
        .toast.showing {
            opacity: 0;
        }
        .toast:not(.show) {
            display: none;
        }

        .toast-container {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            pointer-events: none;
        }
        .toast-container > :not(:last-child) {
            margin-bottom: 0.75rem;
        }

        .toast-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0.5rem 0.75rem;
            color: #6c757d;
            background-color: rgba(255, 255, 255, 0.85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }
        .toast-header .btn-close {
            margin-right: -0.375rem;
            margin-left: 0.75rem;
        }

        .toast-body {
            padding: 0.75rem;
            word-wrap: break-word;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1055;
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 0.5rem;
            pointer-events: none;
        }
        .modal.fade .modal-dialog {
            -webkit-transition: -webkit-transform 0.3s ease-out;
            transition: -webkit-transform 0.3s ease-out;
            transition: transform 0.3s ease-out;
            transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px);
        }
        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                -webkit-transition: none;
                transition: none;
            }
        }
        .modal.show .modal-dialog {
            -webkit-transform: none;
            transform: none;
        }
        .modal.modal-static .modal-dialog {
            -webkit-transform: scale(1.02);
            transform: scale(1.02);
        }

        .modal-dialog-scrollable {
            height: calc(100% - 1rem);
        }
        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden;
        }
        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }

        .modal-dialog-centered {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - 1rem);
        }

        .modal-content {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 0 solid rgba(0, 0, 0, 0.2);
            border-radius: 0.325rem;
            outline: 0;
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }
        .modal-backdrop.fade {
            opacity: 0;
        }
        .modal-backdrop.show {
            opacity: 0.5;
        }

        .modal-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            border-top-left-radius: 0.325rem;
            border-top-right-radius: 0.325rem;
        }
        .modal-header .btn-close {
            padding: 0.5rem 0.5rem;
            margin: -0.5rem -0.5rem -0.5rem auto;
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .modal-body {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem;
        }

        .modal-footer {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: 0.75rem;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom-right-radius: 0.325rem;
            border-bottom-left-radius: 0.325rem;
        }
        .modal-footer > * {
            margin: 0.25rem;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }

            .modal-dialog-scrollable {
                height: calc(100% - 3.5rem);
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem);
            }

            .modal-sm {
                max-width: 300px;
            }
        }
        @media (min-width: 992px) {
            .modal-lg,
            .modal-xl {
                max-width: 800px;
            }
        }
        @media (min-width: 1200px) {
            .modal-xl {
                max-width: 1140px;
            }
        }
        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }
        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }
        .modal-fullscreen .modal-header {
            border-radius: 0;
        }
        .modal-fullscreen .modal-body {
            overflow-y: auto;
        }
        .modal-fullscreen .modal-footer {
            border-radius: 0;
        }

        @media (max-width: 575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-sm-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto;
            }
            .modal-fullscreen-sm-down .modal-footer {
                border-radius: 0;
            }
        }
        @media (max-width: 767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-md-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto;
            }
            .modal-fullscreen-md-down .modal-footer {
                border-radius: 0;
            }
        }
        @media (max-width: 991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-lg-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto;
            }
            .modal-fullscreen-lg-down .modal-footer {
                border-radius: 0;
            }
        }
        @media (max-width: 1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-xl-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto;
            }
            .modal-fullscreen-xl-down .modal-footer {
                border-radius: 0;
            }
        }
        @media (max-width: 1399.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-xxl-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto;
            }
            .modal-fullscreen-xxl-down .modal-footer {
                border-radius: 0;
            }
        }
        .tooltip {
            position: absolute;
            z-index: 1080;
            display: block;
            margin: 0;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.6875rem;
            word-wrap: break-word;
            opacity: 0;
        }
        .tooltip.show {
            opacity: 0.9;
        }
        .tooltip .tooltip-arrow {
            position: absolute;
            display: block;
            width: 0.8rem;
            height: 0.4rem;
        }
        .tooltip .tooltip-arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^=top] {
            padding: 0.4rem 0;
        }
        .bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
            bottom: 0;
        }
        .bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
            top: -1px;
            border-width: 0.4rem 0.4rem 0;
            border-top-color: #000;
        }

        .bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^=right] {
            padding: 0 0.4rem;
        }
        .bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
            left: 0;
            width: 0.4rem;
            height: 0.8rem;
        }
        .bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
            right: -1px;
            border-width: 0.4rem 0.4rem 0.4rem 0;
            border-right-color: #000;
        }

        .bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^=bottom] {
            padding: 0.4rem 0;
        }
        .bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
            top: 0;
        }
        .bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
            bottom: -1px;
            border-width: 0 0.4rem 0.4rem;
            border-bottom-color: #000;
        }

        .bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^=left] {
            padding: 0 0.4rem;
        }
        .bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
            right: 0;
            width: 0.4rem;
            height: 0.8rem;
        }
        .bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
            left: -1px;
            border-width: 0.4rem 0 0.4rem 0.4rem;
            border-left-color: #000;
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 0.25rem 0.5rem;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 0.25rem;
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0 /* rtl:ignore */;
            z-index: 1070;
            display: block;
            max-width: 276px;
            font-family: "Roboto", sans-serif;
            font-style: normal;
            font-weight: 500;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: 0.875rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 0.3rem;
        }
        .popover .popover-arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: 0.5rem;
        }
        .popover .popover-arrow::before, .popover .popover-arrow::after {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid;
        }

        .bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
            bottom: calc(-0.5rem - 1px);
        }
        .bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
            bottom: 0;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: rgba(0, 0, 0, 0.25);
        }
        .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
            bottom: 1px;
            border-width: 0.5rem 0.5rem 0;
            border-top-color: #fff;
        }

        .bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
            left: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
        }
        .bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
            left: 0;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: rgba(0, 0, 0, 0.25);
        }
        .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
            left: 1px;
            border-width: 0.5rem 0.5rem 0.5rem 0;
            border-right-color: #fff;
        }

        .bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
            top: calc(-0.5rem - 1px);
        }
        .bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
            top: 0;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: rgba(0, 0, 0, 0.25);
        }
        .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
            top: 1px;
            border-width: 0 0.5rem 0.5rem 0.5rem;
            border-bottom-color: #fff;
        }
        .bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -0.5rem;
            content: "";
            border-bottom: 1px solid #f0f0f0;
        }

        .bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
            right: calc(-0.5rem - 1px);
            width: 0.5rem;
            height: 1rem;
        }
        .bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
            right: 0;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: rgba(0, 0, 0, 0.25);
        }
        .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
            right: 1px;
            border-width: 0.5rem 0 0.5rem 0.5rem;
            border-left-color: #fff;
        }

        .popover-header {
            padding: 0.5rem 1rem;
            margin-bottom: 0;
            font-size: 0.9375rem;
            color: #24292d;
            background-color: #f0f0f0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            border-top-left-radius: calc(0.3rem - 1px);
            border-top-right-radius: calc(0.3rem - 1px);
        }
        .popover-header:empty {
            display: none;
        }

        .popover-body {
            padding: 1rem 1rem;
            color: #212529;
        }

        .carousel {
            position: relative;
        }

        .carousel.pointer-event {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        .carousel-inner::after {
            display: block;
            clear: both;
            content: "";
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: -webkit-transform 0.6s ease-in-out;
            transition: -webkit-transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out;
            transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .carousel-item {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }

        /* rtl:begin:ignore */
        .carousel-item-next:not(.carousel-item-start),
        .active.carousel-item-end {
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        .carousel-item-prev:not(.carousel-item-end),
        .active.carousel-item-start {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }

        /* rtl:end:ignore */
        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-property: opacity;
            transition-property: opacity;
            -webkit-transform: none;
            transform: none;
        }
        .carousel-fade .carousel-item.active,
        .carousel-fade .carousel-item-next.carousel-item-start,
        .carousel-fade .carousel-item-prev.carousel-item-end {
            z-index: 1;
            opacity: 1;
        }
        .carousel-fade .active.carousel-item-start,
        .carousel-fade .active.carousel-item-end {
            z-index: 0;
            opacity: 0;
            -webkit-transition: opacity 0s 0.6s;
            transition: opacity 0s 0.6s;
        }
        @media (prefers-reduced-motion: reduce) {
            .carousel-fade .active.carousel-item-start,
            .carousel-fade .active.carousel-item-end {
                -webkit-transition: none;
                transition: none;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: none;
            border: 0;
            opacity: 0.5;
            -webkit-transition: opacity 0.15s ease;
            transition: opacity 0.15s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .carousel-control-prev,
            .carousel-control-next {
                -webkit-transition: none;
                transition: none;
            }
        }
        .carousel-control-prev:hover, .carousel-control-prev:focus,
        .carousel-control-next:hover,
        .carousel-control-next:focus {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: 0.9;
        }

        .carousel-control-prev {
            left: 0;
        }

        .carousel-control-next {
            right: 0;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%;
        }

        /* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 0;
            margin-right: 15%;
            margin-bottom: 1rem;
            margin-left: 15%;
            list-style: none;
        }
        .carousel-indicators [data-bs-target] {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            padding: 0;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: 0.5;
            -webkit-transition: opacity 0.6s ease;
            transition: opacity 0.6s ease;
        }
        @media (prefers-reduced-motion: reduce) {
            .carousel-indicators [data-bs-target] {
                -webkit-transition: none;
                transition: none;
            }
        }
        .carousel-indicators .active {
            opacity: 1;
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 1.25rem;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center;
        }

        .carousel-dark .carousel-control-prev-icon,
        .carousel-dark .carousel-control-next-icon {
            -webkit-filter: invert(1) grayscale(100);
            filter: invert(1) grayscale(100);
        }
        .carousel-dark .carousel-indicators [data-bs-target] {
            background-color: #000;
        }
        .carousel-dark .carousel-caption {
            color: #000;
        }

        @-webkit-keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg) /* rtl:ignore */;
                transform: rotate(360deg) /* rtl:ignore */;
            }
        }

        @keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg) /* rtl:ignore */;
                transform: rotate(360deg) /* rtl:ignore */;
            }
        }
        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: -0.125em;
            border: 0.25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: 0.75s linear infinite spinner-border;
            animation: 0.75s linear infinite spinner-border;
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: 0.2em;
        }

        @-webkit-keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: -0.125em;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: 0.75s linear infinite spinner-grow;
            animation: 0.75s linear infinite spinner-grow;
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem;
        }

        @media (prefers-reduced-motion: reduce) {
            .spinner-border,
            .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s;
            }
        }
        .offcanvas {
            position: fixed;
            bottom: 0;
            z-index: 1045;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 100%;
            visibility: hidden;
            background-color: #fff;
            background-clip: padding-box;
            outline: 0;
            -webkit-transition: -webkit-transform 0.3s ease-in-out;
            transition: -webkit-transform 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out;
            transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .offcanvas {
                -webkit-transition: none;
                transition: none;
            }
        }

        .offcanvas-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000;
        }
        .offcanvas-backdrop.fade {
            opacity: 0;
        }
        .offcanvas-backdrop.show {
            opacity: 0.5;
        }

        .offcanvas-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1.875rem;
        }
        .offcanvas-header .btn-close {
            padding: 0.5rem 0.9375rem;
            margin-top: -0.5rem;
            margin-right: -0.9375rem;
            margin-bottom: -0.5rem;
        }

        .offcanvas-title {
            margin-bottom: 0;
            line-height: 1.5;
        }

        .offcanvas-body {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding: 1rem 1.875rem;
            overflow-y: auto;
        }

        .offcanvas-start {
            top: 0;
            left: 0;
            width: 400px;
            border-right: 1px solid rgba(0, 0, 0, 0.2);
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }

        .offcanvas-end {
            top: 0;
            right: 0;
            width: 400px;
            border-left: 1px solid rgba(0, 0, 0, 0.2);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        .offcanvas-top {
            top: 0;
            right: 0;
            left: 0;
            height: 30vh;
            max-height: 100%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
        }

        .offcanvas-bottom {
            right: 0;
            left: 0;
            height: 30vh;
            max-height: 100%;
            border-top: 1px solid rgba(0, 0, 0, 0.2);
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
        }

        .offcanvas.show {
            -webkit-transform: none;
            transform: none;
        }

        .placeholder {
            display: inline-block;
            min-height: 1em;
            vertical-align: middle;
            cursor: wait;
            background-color: currentColor;
            opacity: 0.5;
        }
        .placeholder.btn::before {
            display: inline-block;
            content: "";
        }

        .placeholder-xs {
            min-height: 0.6em;
        }

        .placeholder-sm {
            min-height: 0.8em;
        }

        .placeholder-lg {
            min-height: 1.2em;
        }

        .placeholder-glow .placeholder {
            -webkit-animation: placeholder-glow 2s ease-in-out infinite;
            animation: placeholder-glow 2s ease-in-out infinite;
        }

        @-webkit-keyframes placeholder-glow {
            50% {
                opacity: 0.2;
            }
        }

        @keyframes placeholder-glow {
            50% {
                opacity: 0.2;
            }
        }
        .placeholder-wave {
            -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
            mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
            -webkit-mask-size: 200% 100%;
            mask-size: 200% 100%;
            -webkit-animation: placeholder-wave 2s linear infinite;
            animation: placeholder-wave 2s linear infinite;
        }

        @-webkit-keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%;
            }
        }

        @keyframes placeholder-wave {
            100% {
                -webkit-mask-position: -200% 0%;
                mask-position: -200% 0%;
            }
        }
        .clearfix::after {
            display: block;
            clear: both;
            content: "";
        }

        .link-primary {
            color: #066ac9;
        }
        .link-primary:hover, .link-primary:focus {
            color: #0555a1;
        }

        .link-white {
            color: #fff;
        }
        .link-white:hover, .link-white:focus {
            color: white;
        }

        .link-secondary {
            color: #9a9ea4;
        }
        .link-secondary:hover, .link-secondary:focus {
            color: #7b7e83;
        }

        .link-success {
            color: #0cbc87;
        }
        .link-success:hover, .link-success:focus {
            color: #0a966c;
        }

        .link-info {
            color: #17a2b8;
        }
        .link-info:hover, .link-info:focus {
            color: #128293;
        }

        .link-warning {
            color: #f7c32e;
        }
        .link-warning:hover, .link-warning:focus {
            color: #f9cf58;
        }

        .link-danger {
            color: #d6293e;
        }
        .link-danger:hover, .link-danger:focus {
            color: #ab2132;
        }

        .link-light {
            color: #f5f7f9;
        }
        .link-light:hover, .link-light:focus {
            color: #f7f9fa;
        }

        .link-dark {
            color: #24292d;
        }
        .link-dark:hover, .link-dark:focus {
            color: #1d2124;
        }

        .link-orange {
            color: #fd7e14;
        }
        .link-orange:hover, .link-orange:focus {
            color: #ca6510;
        }

        .link-purple {
            color: #6f42c1;
        }
        .link-purple:hover, .link-purple:focus {
            color: #59359a;
        }

        .link-blue {
            color: #1d3b53;
        }
        .link-blue:hover, .link-blue:focus {
            color: #172f42;
        }

        .ratio {
            position: relative;
            width: 100%;
        }
        .ratio::before {
            display: block;
            padding-top: var(--bs-aspect-ratio);
            content: "";
        }
        .ratio > * {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .ratio-1x1 {
            --bs-aspect-ratio: 100%;
        }

        .ratio-4x3 {
            --bs-aspect-ratio: 75%;
        }

        .ratio-16x9 {
            --bs-aspect-ratio: 56.25%;
        }

        .ratio-21x9 {
            --bs-aspect-ratio: 42.8571428571%;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030;
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030;
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020;
        }

        @media (min-width: 576px) {
            .sticky-sm-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }
        @media (min-width: 768px) {
            .sticky-md-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }
        @media (min-width: 992px) {
            .sticky-lg-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }
        @media (min-width: 1200px) {
            .sticky-xl-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }
        @media (min-width: 1400px) {
            .sticky-xxl-top {
                position: sticky;
                top: 0;
                z-index: 1020;
            }
        }
        .hstack {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-item-align: stretch;
            align-self: stretch;
        }

        .vstack {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-item-align: stretch;
            align-self: stretch;
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important;
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: "";
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .vr {
            display: inline-block;
            -ms-flex-item-align: stretch;
            align-self: stretch;
            width: 1px;
            min-height: 1em;
            background-color: currentColor;
            opacity: 0.25;
        }

        .align-baseline {
            vertical-align: baseline !important;
        }

        .align-top {
            vertical-align: top !important;
        }

        .align-middle {
            vertical-align: middle !important;
        }

        .align-bottom {
            vertical-align: bottom !important;
        }

        .align-text-bottom {
            vertical-align: text-bottom !important;
        }

        .align-text-top {
            vertical-align: text-top !important;
        }

        .float-start {
            float: left !important;
        }

        .float-end {
            float: right !important;
        }

        .float-none {
            float: none !important;
        }

        .opacity-0 {
            opacity: 0 !important;
        }

        .opacity-25 {
            opacity: 0.25 !important;
        }

        .opacity-50 {
            opacity: 0.5 !important;
        }

        .opacity-75 {
            opacity: 0.75 !important;
        }

        .opacity-100 {
            opacity: 1 !important;
        }

        .overflow-auto {
            overflow: auto !important;
        }

        .overflow-hidden {
            overflow: hidden !important;
        }

        .overflow-visible {
            overflow: visible !important;
        }

        .overflow-scroll {
            overflow: scroll !important;
        }

        .d-inline {
            display: inline !important;
        }

        .d-inline-block {
            display: inline-block !important;
        }

        .d-block {
            display: block !important;
        }

        .d-grid {
            display: grid !important;
        }

        .d-table {
            display: table !important;
        }

        .d-table-row {
            display: table-row !important;
        }

        .d-table-cell {
            display: table-cell !important;
        }

        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .d-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
        }

        .d-none {
            display: none !important;
        }

        .shadow {
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15) !important;
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15) !important;
        }

        .shadow-sm {
            -webkit-box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15) !important;
            box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15) !important;
        }

        .shadow-lg {
            -webkit-box-shadow: 0 1rem 3rem rgba(29, 58, 83, 0.15) !important;
            box-shadow: 0 1rem 3rem rgba(29, 58, 83, 0.15) !important;
        }

        .shadow-none {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .position-static {
            position: static !important;
        }

        .position-relative {
            position: relative !important;
        }

        .position-absolute {
            position: absolute !important;
        }

        .position-fixed {
            position: fixed !important;
        }

        .position-sticky {
            position: sticky !important;
        }

        .top-0 {
            top: 0 !important;
        }

        .top-50 {
            top: 50% !important;
        }

        .top-100 {
            top: 100% !important;
        }

        .bottom-0 {
            bottom: 0 !important;
        }

        .bottom-50 {
            bottom: 50% !important;
        }

        .bottom-100 {
            bottom: 100% !important;
        }

        .start-0 {
            left: 0 !important;
        }

        .start-50 {
            left: 50% !important;
        }

        .start-100 {
            left: 100% !important;
        }

        .end-0 {
            right: 0 !important;
        }

        .end-50 {
            right: 50% !important;
        }

        .end-100 {
            right: 100% !important;
        }

        .translate-middle {
            -webkit-transform: translate(-50%, -50%) !important;
            transform: translate(-50%, -50%) !important;
        }

        .translate-middle-x {
            -webkit-transform: translateX(-50%) !important;
            transform: translateX(-50%) !important;
        }

        .translate-middle-y {
            -webkit-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }

        .border {
            border: 1px solid rgba(0, 0, 0, 0.1) !important;
        }

        .border-0 {
            border: 0 !important;
        }

        .border-top {
            border-top: 1px solid rgba(0, 0, 0, 0.1) !important;
        }

        .border-top-0 {
            border-top: 0 !important;
        }

        .border-end {
            border-right: 1px solid rgba(0, 0, 0, 0.1) !important;
        }

        .border-end-0 {
            border-right: 0 !important;
        }

        .border-bottom {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
        }

        .border-bottom-0 {
            border-bottom: 0 !important;
        }

        .border-start {
            border-left: 1px solid rgba(0, 0, 0, 0.1) !important;
        }

        .border-start-0 {
            border-left: 0 !important;
        }

        .border-primary {
            border-color: #066ac9 !important;
        }

        .border-white {
            border-color: #fff !important;
        }

        .border-secondary {
            border-color: #9a9ea4 !important;
        }

        .border-success {
            border-color: #0cbc87 !important;
        }

        .border-info {
            border-color: #17a2b8 !important;
        }

        .border-warning {
            border-color: #f7c32e !important;
        }

        .border-danger {
            border-color: #d6293e !important;
        }

        .border-light {
            border-color: #f5f7f9 !important;
        }

        .border-dark {
            border-color: #24292d !important;
        }

        .border-orange {
            border-color: #fd7e14 !important;
        }

        .border-purple {
            border-color: #6f42c1 !important;
        }

        .border-blue {
            border-color: #1d3b53 !important;
        }

        .border-1 {
            border-width: 1px !important;
        }

        .border-2 {
            border-width: 2px !important;
        }

        .border-3 {
            border-width: 3px !important;
        }

        .border-4 {
            border-width: 4px !important;
        }

        .border-5 {
            border-width: 5px !important;
        }

        .w-25 {
            width: 25% !important;
        }

        .w-50 {
            width: 50% !important;
        }

        .w-75 {
            width: 75% !important;
        }

        .w-100 {
            width: 100% !important;
        }

        .w-auto {
            width: auto !important;
        }

        .mw-100 {
            max-width: 100% !important;
        }

        .vw-100 {
            width: 100vw !important;
        }

        .min-vw-100 {
            min-width: 100vw !important;
        }

        .h-25 {
            height: 25% !important;
        }

        .h-50 {
            height: 50% !important;
        }

        .h-75 {
            height: 75% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        .h-auto {
            height: auto !important;
        }

        .mh-100 {
            max-height: 100% !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .min-vh-100 {
            min-height: 100vh !important;
        }

        .flex-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important;
        }

        .flex-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
        }

        .flex-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }

        .flex-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important;
        }

        .flex-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important;
        }

        .flex-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important;
        }

        .flex-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important;
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important;
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important;
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important;
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important;
        }

        .gap-0 {
            gap: 0 !important;
        }

        .gap-1 {
            gap: 0.25rem !important;
        }

        .gap-2 {
            gap: 0.5rem !important;
        }

        .gap-3 {
            gap: 1rem !important;
        }

        .gap-4 {
            gap: 1.6rem !important;
        }

        .gap-5 {
            gap: 3rem !important;
        }

        .gap-6 {
            gap: 3.5rem !important;
        }

        .gap-7 {
            gap: 6rem !important;
        }

        .gap-8 {
            gap: 7rem !important;
        }

        .gap-9 {
            gap: 10rem !important;
        }

        .justify-content-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important;
        }

        .justify-content-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important;
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }

        .justify-content-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important;
        }

        .justify-content-evenly {
            -webkit-box-pack: space-evenly !important;
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important;
        }

        .align-items-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important;
        }

        .align-items-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .align-items-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important;
        }

        .align-items-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important;
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important;
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important;
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important;
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important;
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important;
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important;
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important;
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important;
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important;
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important;
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important;
        }

        .order-first {
            -webkit-box-ordinal-group: 0 !important;
            -ms-flex-order: -1 !important;
            order: -1 !important;
        }

        .order-0 {
            -webkit-box-ordinal-group: 1 !important;
            -ms-flex-order: 0 !important;
            order: 0 !important;
        }

        .order-1 {
            -webkit-box-ordinal-group: 2 !important;
            -ms-flex-order: 1 !important;
            order: 1 !important;
        }

        .order-2 {
            -webkit-box-ordinal-group: 3 !important;
            -ms-flex-order: 2 !important;
            order: 2 !important;
        }

        .order-3 {
            -webkit-box-ordinal-group: 4 !important;
            -ms-flex-order: 3 !important;
            order: 3 !important;
        }

        .order-4 {
            -webkit-box-ordinal-group: 5 !important;
            -ms-flex-order: 4 !important;
            order: 4 !important;
        }

        .order-5 {
            -webkit-box-ordinal-group: 6 !important;
            -ms-flex-order: 5 !important;
            order: 5 !important;
        }

        .order-last {
            -webkit-box-ordinal-group: 7 !important;
            -ms-flex-order: 6 !important;
            order: 6 !important;
        }

        .m-0 {
            margin: 0 !important;
        }

        .m-1 {
            margin: 0.25rem !important;
        }

        .m-2 {
            margin: 0.5rem !important;
        }

        .m-3 {
            margin: 1rem !important;
        }

        .m-4 {
            margin: 1.6rem !important;
        }

        .m-5 {
            margin: 3rem !important;
        }

        .m-6 {
            margin: 3.5rem !important;
        }

        .m-7 {
            margin: 6rem !important;
        }

        .m-8 {
            margin: 7rem !important;
        }

        .m-9 {
            margin: 10rem !important;
        }

        .m-auto {
            margin: auto !important;
        }

        .mx-0 {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .mx-1 {
            margin-right: 0.25rem !important;
            margin-left: 0.25rem !important;
        }

        .mx-2 {
            margin-right: 0.5rem !important;
            margin-left: 0.5rem !important;
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important;
        }

        .mx-4 {
            margin-right: 1.6rem !important;
            margin-left: 1.6rem !important;
        }

        .mx-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important;
        }

        .mx-6 {
            margin-right: 3.5rem !important;
            margin-left: 3.5rem !important;
        }

        .mx-7 {
            margin-right: 6rem !important;
            margin-left: 6rem !important;
        }

        .mx-8 {
            margin-right: 7rem !important;
            margin-left: 7rem !important;
        }

        .mx-9 {
            margin-right: 10rem !important;
            margin-left: 10rem !important;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important;
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .my-1 {
            margin-top: 0.25rem !important;
            margin-bottom: 0.25rem !important;
        }

        .my-2 {
            margin-top: 0.5rem !important;
            margin-bottom: 0.5rem !important;
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .my-4 {
            margin-top: 1.6rem !important;
            margin-bottom: 1.6rem !important;
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important;
        }

        .my-6 {
            margin-top: 3.5rem !important;
            margin-bottom: 3.5rem !important;
        }

        .my-7 {
            margin-top: 6rem !important;
            margin-bottom: 6rem !important;
        }

        .my-8 {
            margin-top: 7rem !important;
            margin-bottom: 7rem !important;
        }

        .my-9 {
            margin-top: 10rem !important;
            margin-bottom: 10rem !important;
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .mt-0 {
            margin-top: 0 !important;
        }

        .mt-1 {
            margin-top: 0.25rem !important;
        }

        .mt-2 {
            margin-top: 0.5rem !important;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        .mt-4 {
            margin-top: 1.6rem !important;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .mt-6 {
            margin-top: 3.5rem !important;
        }

        .mt-7 {
            margin-top: 6rem !important;
        }

        .mt-8 {
            margin-top: 7rem !important;
        }

        .mt-9 {
            margin-top: 10rem !important;
        }

        .mt-auto {
            margin-top: auto !important;
        }

        .me-0 {
            margin-right: 0 !important;
        }

        .me-1 {
            margin-right: 0.25rem !important;
        }

        .me-2 {
            margin-right: 0.5rem !important;
        }

        .me-3 {
            margin-right: 1rem !important;
        }

        .me-4 {
            margin-right: 1.6rem !important;
        }

        .me-5 {
            margin-right: 3rem !important;
        }

        .me-6 {
            margin-right: 3.5rem !important;
        }

        .me-7 {
            margin-right: 6rem !important;
        }

        .me-8 {
            margin-right: 7rem !important;
        }

        .me-9 {
            margin-right: 10rem !important;
        }

        .me-auto {
            margin-right: auto !important;
        }

        .mb-0 {
            margin-bottom: 0 !important;
        }

        .mb-1 {
            margin-bottom: 0.25rem !important;
        }

        .mb-2 {
            margin-bottom: 0.5rem !important;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .mb-4 {
            margin-bottom: 1.6rem !important;
        }

        .mb-5 {
            margin-bottom: 3rem !important;
        }

        .mb-6 {
            margin-bottom: 3.5rem !important;
        }

        .mb-7 {
            margin-bottom: 6rem !important;
        }

        .mb-8 {
            margin-bottom: 7rem !important;
        }

        .mb-9 {
            margin-bottom: 10rem !important;
        }

        .mb-auto {
            margin-bottom: auto !important;
        }

        .ms-0 {
            margin-left: 0 !important;
        }

        .ms-1 {
            margin-left: 0.25rem !important;
        }

        .ms-2 {
            margin-left: 0.5rem !important;
        }

        .ms-3 {
            margin-left: 1rem !important;
        }

        .ms-4 {
            margin-left: 1.6rem !important;
        }

        .ms-5 {
            margin-left: 3rem !important;
        }

        .ms-6 {
            margin-left: 3.5rem !important;
        }

        .ms-7 {
            margin-left: 6rem !important;
        }

        .ms-8 {
            margin-left: 7rem !important;
        }

        .ms-9 {
            margin-left: 10rem !important;
        }

        .ms-auto {
            margin-left: auto !important;
        }

        .m-n1 {
            margin: -0.25rem !important;
        }

        .m-n2 {
            margin: -0.5rem !important;
        }

        .m-n3 {
            margin: -1rem !important;
        }

        .m-n4 {
            margin: -1.6rem !important;
        }

        .m-n5 {
            margin: -3rem !important;
        }

        .m-n6 {
            margin: -3.5rem !important;
        }

        .m-n7 {
            margin: -6rem !important;
        }

        .m-n8 {
            margin: -7rem !important;
        }

        .m-n9 {
            margin: -10rem !important;
        }

        .mx-n1 {
            margin-right: -0.25rem !important;
            margin-left: -0.25rem !important;
        }

        .mx-n2 {
            margin-right: -0.5rem !important;
            margin-left: -0.5rem !important;
        }

        .mx-n3 {
            margin-right: -1rem !important;
            margin-left: -1rem !important;
        }

        .mx-n4 {
            margin-right: -1.6rem !important;
            margin-left: -1.6rem !important;
        }

        .mx-n5 {
            margin-right: -3rem !important;
            margin-left: -3rem !important;
        }

        .mx-n6 {
            margin-right: -3.5rem !important;
            margin-left: -3.5rem !important;
        }

        .mx-n7 {
            margin-right: -6rem !important;
            margin-left: -6rem !important;
        }

        .mx-n8 {
            margin-right: -7rem !important;
            margin-left: -7rem !important;
        }

        .mx-n9 {
            margin-right: -10rem !important;
            margin-left: -10rem !important;
        }

        .my-n1 {
            margin-top: -0.25rem !important;
            margin-bottom: -0.25rem !important;
        }

        .my-n2 {
            margin-top: -0.5rem !important;
            margin-bottom: -0.5rem !important;
        }

        .my-n3 {
            margin-top: -1rem !important;
            margin-bottom: -1rem !important;
        }

        .my-n4 {
            margin-top: -1.6rem !important;
            margin-bottom: -1.6rem !important;
        }

        .my-n5 {
            margin-top: -3rem !important;
            margin-bottom: -3rem !important;
        }

        .my-n6 {
            margin-top: -3.5rem !important;
            margin-bottom: -3.5rem !important;
        }

        .my-n7 {
            margin-top: -6rem !important;
            margin-bottom: -6rem !important;
        }

        .my-n8 {
            margin-top: -7rem !important;
            margin-bottom: -7rem !important;
        }

        .my-n9 {
            margin-top: -10rem !important;
            margin-bottom: -10rem !important;
        }

        .mt-n1 {
            margin-top: -0.25rem !important;
        }

        .mt-n2 {
            margin-top: -0.5rem !important;
        }

        .mt-n3 {
            margin-top: -1rem !important;
        }

        .mt-n4 {
            margin-top: -1.6rem !important;
        }

        .mt-n5 {
            margin-top: -3rem !important;
        }

        .mt-n6 {
            margin-top: -3.5rem !important;
        }

        .mt-n7 {
            margin-top: -6rem !important;
        }

        .mt-n8 {
            margin-top: -7rem !important;
        }

        .mt-n9 {
            margin-top: -10rem !important;
        }

        .me-n1 {
            margin-right: -0.25rem !important;
        }

        .me-n2 {
            margin-right: -0.5rem !important;
        }

        .me-n3 {
            margin-right: -1rem !important;
        }

        .me-n4 {
            margin-right: -1.6rem !important;
        }

        .me-n5 {
            margin-right: -3rem !important;
        }

        .me-n6 {
            margin-right: -3.5rem !important;
        }

        .me-n7 {
            margin-right: -6rem !important;
        }

        .me-n8 {
            margin-right: -7rem !important;
        }

        .me-n9 {
            margin-right: -10rem !important;
        }

        .mb-n1 {
            margin-bottom: -0.25rem !important;
        }

        .mb-n2 {
            margin-bottom: -0.5rem !important;
        }

        .mb-n3 {
            margin-bottom: -1rem !important;
        }

        .mb-n4 {
            margin-bottom: -1.6rem !important;
        }

        .mb-n5 {
            margin-bottom: -3rem !important;
        }

        .mb-n6 {
            margin-bottom: -3.5rem !important;
        }

        .mb-n7 {
            margin-bottom: -6rem !important;
        }

        .mb-n8 {
            margin-bottom: -7rem !important;
        }

        .mb-n9 {
            margin-bottom: -10rem !important;
        }

        .ms-n1 {
            margin-left: -0.25rem !important;
        }

        .ms-n2 {
            margin-left: -0.5rem !important;
        }

        .ms-n3 {
            margin-left: -1rem !important;
        }

        .ms-n4 {
            margin-left: -1.6rem !important;
        }

        .ms-n5 {
            margin-left: -3rem !important;
        }

        .ms-n6 {
            margin-left: -3.5rem !important;
        }

        .ms-n7 {
            margin-left: -6rem !important;
        }

        .ms-n8 {
            margin-left: -7rem !important;
        }

        .ms-n9 {
            margin-left: -10rem !important;
        }

        .p-0 {
            padding: 0 !important;
        }

        .p-1 {
            padding: 0.25rem !important;
        }

        .p-2 {
            padding: 0.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .p-4 {
            padding: 1.6rem !important;
        }

        .p-5 {
            padding: 3rem !important;
        }

        .p-6 {
            padding: 3.5rem !important;
        }

        .p-7 {
            padding: 6rem !important;
        }

        .p-8 {
            padding: 7rem !important;
        }

        .p-9 {
            padding: 10rem !important;
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important;
        }

        .px-1 {
            padding-right: 0.25rem !important;
            padding-left: 0.25rem !important;
        }

        .px-2 {
            padding-right: 0.5rem !important;
            padding-left: 0.5rem !important;
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }

        .px-4 {
            padding-right: 1.6rem !important;
            padding-left: 1.6rem !important;
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }

        .px-6 {
            padding-right: 3.5rem !important;
            padding-left: 3.5rem !important;
        }

        .px-7 {
            padding-right: 6rem !important;
            padding-left: 6rem !important;
        }

        .px-8 {
            padding-right: 7rem !important;
            padding-left: 7rem !important;
        }

        .px-9 {
            padding-right: 10rem !important;
            padding-left: 10rem !important;
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .py-1 {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
        }

        .py-2 {
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .py-4 {
            padding-top: 1.6rem !important;
            padding-bottom: 1.6rem !important;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .py-6 {
            padding-top: 3.5rem !important;
            padding-bottom: 3.5rem !important;
        }

        .py-7 {
            padding-top: 6rem !important;
            padding-bottom: 6rem !important;
        }

        .py-8 {
            padding-top: 7rem !important;
            padding-bottom: 7rem !important;
        }

        .py-9 {
            padding-top: 10rem !important;
            padding-bottom: 10rem !important;
        }

        .pt-0 {
            padding-top: 0 !important;
        }

        .pt-1 {
            padding-top: 0.25rem !important;
        }

        .pt-2 {
            padding-top: 0.5rem !important;
        }

        .pt-3 {
            padding-top: 1rem !important;
        }

        .pt-4 {
            padding-top: 1.6rem !important;
        }

        .pt-5 {
            padding-top: 3rem !important;
        }

        .pt-6 {
            padding-top: 3.5rem !important;
        }

        .pt-7 {
            padding-top: 6rem !important;
        }

        .pt-8 {
            padding-top: 7rem !important;
        }

        .pt-9 {
            padding-top: 10rem !important;
        }

        .pe-0 {
            padding-right: 0 !important;
        }

        .pe-1 {
            padding-right: 0.25rem !important;
        }

        .pe-2 {
            padding-right: 0.5rem !important;
        }

        .pe-3 {
            padding-right: 1rem !important;
        }

        .pe-4 {
            padding-right: 1.6rem !important;
        }

        .pe-5 {
            padding-right: 3rem !important;
        }

        .pe-6 {
            padding-right: 3.5rem !important;
        }

        .pe-7 {
            padding-right: 6rem !important;
        }

        .pe-8 {
            padding-right: 7rem !important;
        }

        .pe-9 {
            padding-right: 10rem !important;
        }

        .pb-0 {
            padding-bottom: 0 !important;
        }

        .pb-1 {
            padding-bottom: 0.25rem !important;
        }

        .pb-2 {
            padding-bottom: 0.5rem !important;
        }

        .pb-3 {
            padding-bottom: 1rem !important;
        }

        .pb-4 {
            padding-bottom: 1.6rem !important;
        }

        .pb-5 {
            padding-bottom: 3rem !important;
        }

        .pb-6 {
            padding-bottom: 3.5rem !important;
        }

        .pb-7 {
            padding-bottom: 6rem !important;
        }

        .pb-8 {
            padding-bottom: 7rem !important;
        }

        .pb-9 {
            padding-bottom: 10rem !important;
        }

        .ps-0 {
            padding-left: 0 !important;
        }

        .ps-1 {
            padding-left: 0.25rem !important;
        }

        .ps-2 {
            padding-left: 0.5rem !important;
        }

        .ps-3 {
            padding-left: 1rem !important;
        }

        .ps-4 {
            padding-left: 1.6rem !important;
        }

        .ps-5 {
            padding-left: 3rem !important;
        }

        .ps-6 {
            padding-left: 3.5rem !important;
        }

        .ps-7 {
            padding-left: 6rem !important;
        }

        .ps-8 {
            padding-left: 7rem !important;
        }

        .ps-9 {
            padding-left: 10rem !important;
        }

        .font-monospace {
            font-family: var(--bs-font-monospace) !important;
        }

        .fs-1 {
            font-size: calc(1.40625rem + 1.875vw) !important;
        }

        .fs-2 {
            font-size: calc(1.359375rem + 1.3125vw) !important;
        }

        .fs-3 {
            font-size: calc(1.3125rem + 0.75vw) !important;
        }

        .fs-4 {
            font-size: calc(1.2890625rem + 0.46875vw) !important;
        }

        .fs-5 {
            font-size: calc(1.25625rem + 0.075vw) !important;
        }

        .fs-6 {
            font-size: 0.9375rem !important;
        }

        .fst-italic {
            font-style: italic !important;
        }

        .fst-normal {
            font-style: normal !important;
        }

        .fw-light {
            font-weight: 400 !important;
        }

        .fw-lighter {
            font-weight: lighter !important;
        }

        .fw-normal {
            font-weight: 500 !important;
        }

        .fw-bold {
            font-weight: 700 !important;
        }

        .fw-bolder {
            font-weight: bolder !important;
        }

        .lh-1 {
            line-height: 1 !important;
        }

        .lh-sm {
            line-height: 1.25 !important;
        }

        .lh-base {
            line-height: 1.5 !important;
        }

        .lh-lg {
            line-height: 2 !important;
        }

        .text-start {
            text-align: left !important;
        }

        .text-end {
            text-align: right !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-decoration-none {
            text-decoration: none !important;
        }

        .text-decoration-underline {
            text-decoration: underline !important;
        }

        .text-decoration-line-through {
            text-decoration: line-through !important;
        }

        .text-lowercase {
            text-transform: lowercase !important;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .text-capitalize {
            text-transform: capitalize !important;
        }

        .text-wrap {
            white-space: normal !important;
        }

        .text-nowrap {
            white-space: nowrap !important;
        }

        /* rtl:begin:remove */
        .text-break {
            word-wrap: break-word !important;
            word-break: break-word !important;
        }

        /* rtl:end:remove */
        .text-primary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
        }

        .text-white {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
        }

        .text-secondary {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
        }

        .text-success {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
        }

        .text-info {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
        }

        .text-warning {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
        }

        .text-danger {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
        }

        .text-light {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
        }

        .text-dark {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
        }

        .text-orange {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-orange-rgb), var(--bs-text-opacity)) !important;
        }

        .text-purple {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-purple-rgb), var(--bs-text-opacity)) !important;
        }

        .text-blue {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-blue-rgb), var(--bs-text-opacity)) !important;
        }

        .text-black {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
        }

        .text-body {
            --bs-text-opacity: 1;
            color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important;
        }

        .text-muted {
            --bs-text-opacity: 1;
            color: #cfd3d7 !important;
        }

        .text-black-50 {
            --bs-text-opacity: 1;
            color: rgba(0, 0, 0, 0.5) !important;
        }

        .text-white-50 {
            --bs-text-opacity: 1;
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .text-reset {
            --bs-text-opacity: 1;
            color: inherit !important;
        }

        .text-opacity-25 {
            --bs-text-opacity: 0.25;
        }

        .text-opacity-50 {
            --bs-text-opacity: 0.5;
        }

        .text-opacity-75 {
            --bs-text-opacity: 0.75;
        }

        .text-opacity-100 {
            --bs-text-opacity: 1;
        }

        .bg-primary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-white {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-secondary {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-success {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-info {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-warning {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-danger {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-light {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-dark {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-orange {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-orange-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-purple {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-purple-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-blue {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-blue-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-black {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-body {
            --bs-bg-opacity: 1;
            background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
        }

        .bg-transparent {
            --bs-bg-opacity: 1;
            background-color: transparent !important;
        }

        .bg-opacity-10 {
            --bs-bg-opacity: 0.1;
        }

        .bg-opacity-25 {
            --bs-bg-opacity: 0.25;
        }

        .bg-opacity-50 {
            --bs-bg-opacity: 0.5;
        }

        .bg-opacity-75 {
            --bs-bg-opacity: 0.75;
        }

        .bg-opacity-100 {
            --bs-bg-opacity: 1;
        }

        .bg-gradient {
            background-image: var(--bs-gradient) !important;
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important;
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important;
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important;
        }

        .pe-none {
            pointer-events: none !important;
        }

        .pe-auto {
            pointer-events: auto !important;
        }

        .rounded {
            border-radius: 0.325rem !important;
        }

        .rounded-0 {
            border-radius: 0 !important;
        }

        .rounded-1 {
            border-radius: 0.2rem !important;
        }

        .rounded-2 {
            border-radius: 0.325rem !important;
        }

        .rounded-3 {
            border-radius: 0.5rem !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        .rounded-top {
            border-top-left-radius: 0.325rem !important;
            border-top-right-radius: 0.325rem !important;
        }

        .rounded-end {
            border-top-right-radius: 0.325rem !important;
            border-bottom-right-radius: 0.325rem !important;
        }

        .rounded-bottom {
            border-bottom-right-radius: 0.325rem !important;
            border-bottom-left-radius: 0.325rem !important;
        }

        .rounded-start {
            border-bottom-left-radius: 0.325rem !important;
            border-top-left-radius: 0.325rem !important;
        }

        .visible {
            visibility: visible !important;
        }

        .invisible {
            visibility: hidden !important;
        }

        @media (min-width: 576px) {
            .float-sm-start {
                float: left !important;
            }

            .float-sm-end {
                float: right !important;
            }

            .float-sm-none {
                float: none !important;
            }

            .d-sm-inline {
                display: inline !important;
            }

            .d-sm-inline-block {
                display: inline-block !important;
            }

            .d-sm-block {
                display: block !important;
            }

            .d-sm-grid {
                display: grid !important;
            }

            .d-sm-table {
                display: table !important;
            }

            .d-sm-table-row {
                display: table-row !important;
            }

            .d-sm-table-cell {
                display: table-cell !important;
            }

            .d-sm-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-sm-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-sm-none {
                display: none !important;
            }

            .flex-sm-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-sm-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-sm-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-sm-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-sm-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-sm-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-sm-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-sm-0 {
                gap: 0 !important;
            }

            .gap-sm-1 {
                gap: 0.25rem !important;
            }

            .gap-sm-2 {
                gap: 0.5rem !important;
            }

            .gap-sm-3 {
                gap: 1rem !important;
            }

            .gap-sm-4 {
                gap: 1.6rem !important;
            }

            .gap-sm-5 {
                gap: 3rem !important;
            }

            .gap-sm-6 {
                gap: 3.5rem !important;
            }

            .gap-sm-7 {
                gap: 6rem !important;
            }

            .gap-sm-8 {
                gap: 7rem !important;
            }

            .gap-sm-9 {
                gap: 10rem !important;
            }

            .justify-content-sm-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-sm-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-sm-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-sm-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-sm-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-sm-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-sm-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-sm-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-sm-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-sm-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-sm-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-sm-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-sm-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-sm-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-sm-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-sm-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-sm-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-sm-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-sm-0 {
                margin: 0 !important;
            }

            .m-sm-1 {
                margin: 0.25rem !important;
            }

            .m-sm-2 {
                margin: 0.5rem !important;
            }

            .m-sm-3 {
                margin: 1rem !important;
            }

            .m-sm-4 {
                margin: 1.6rem !important;
            }

            .m-sm-5 {
                margin: 3rem !important;
            }

            .m-sm-6 {
                margin: 3.5rem !important;
            }

            .m-sm-7 {
                margin: 6rem !important;
            }

            .m-sm-8 {
                margin: 7rem !important;
            }

            .m-sm-9 {
                margin: 10rem !important;
            }

            .m-sm-auto {
                margin: auto !important;
            }

            .mx-sm-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-sm-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-sm-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-sm-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-sm-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }

            .mx-sm-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-sm-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }

            .mx-sm-7 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-sm-8 {
                margin-right: 7rem !important;
                margin-left: 7rem !important;
            }

            .mx-sm-9 {
                margin-right: 10rem !important;
                margin-left: 10rem !important;
            }

            .mx-sm-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-sm-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-sm-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-sm-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }

            .my-sm-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-sm-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }

            .my-sm-7 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-sm-8 {
                margin-top: 7rem !important;
                margin-bottom: 7rem !important;
            }

            .my-sm-9 {
                margin-top: 10rem !important;
                margin-bottom: 10rem !important;
            }

            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-sm-0 {
                margin-top: 0 !important;
            }

            .mt-sm-1 {
                margin-top: 0.25rem !important;
            }

            .mt-sm-2 {
                margin-top: 0.5rem !important;
            }

            .mt-sm-3 {
                margin-top: 1rem !important;
            }

            .mt-sm-4 {
                margin-top: 1.6rem !important;
            }

            .mt-sm-5 {
                margin-top: 3rem !important;
            }

            .mt-sm-6 {
                margin-top: 3.5rem !important;
            }

            .mt-sm-7 {
                margin-top: 6rem !important;
            }

            .mt-sm-8 {
                margin-top: 7rem !important;
            }

            .mt-sm-9 {
                margin-top: 10rem !important;
            }

            .mt-sm-auto {
                margin-top: auto !important;
            }

            .me-sm-0 {
                margin-right: 0 !important;
            }

            .me-sm-1 {
                margin-right: 0.25rem !important;
            }

            .me-sm-2 {
                margin-right: 0.5rem !important;
            }

            .me-sm-3 {
                margin-right: 1rem !important;
            }

            .me-sm-4 {
                margin-right: 1.6rem !important;
            }

            .me-sm-5 {
                margin-right: 3rem !important;
            }

            .me-sm-6 {
                margin-right: 3.5rem !important;
            }

            .me-sm-7 {
                margin-right: 6rem !important;
            }

            .me-sm-8 {
                margin-right: 7rem !important;
            }

            .me-sm-9 {
                margin-right: 10rem !important;
            }

            .me-sm-auto {
                margin-right: auto !important;
            }

            .mb-sm-0 {
                margin-bottom: 0 !important;
            }

            .mb-sm-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-sm-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-sm-3 {
                margin-bottom: 1rem !important;
            }

            .mb-sm-4 {
                margin-bottom: 1.6rem !important;
            }

            .mb-sm-5 {
                margin-bottom: 3rem !important;
            }

            .mb-sm-6 {
                margin-bottom: 3.5rem !important;
            }

            .mb-sm-7 {
                margin-bottom: 6rem !important;
            }

            .mb-sm-8 {
                margin-bottom: 7rem !important;
            }

            .mb-sm-9 {
                margin-bottom: 10rem !important;
            }

            .mb-sm-auto {
                margin-bottom: auto !important;
            }

            .ms-sm-0 {
                margin-left: 0 !important;
            }

            .ms-sm-1 {
                margin-left: 0.25rem !important;
            }

            .ms-sm-2 {
                margin-left: 0.5rem !important;
            }

            .ms-sm-3 {
                margin-left: 1rem !important;
            }

            .ms-sm-4 {
                margin-left: 1.6rem !important;
            }

            .ms-sm-5 {
                margin-left: 3rem !important;
            }

            .ms-sm-6 {
                margin-left: 3.5rem !important;
            }

            .ms-sm-7 {
                margin-left: 6rem !important;
            }

            .ms-sm-8 {
                margin-left: 7rem !important;
            }

            .ms-sm-9 {
                margin-left: 10rem !important;
            }

            .ms-sm-auto {
                margin-left: auto !important;
            }

            .m-sm-n1 {
                margin: -0.25rem !important;
            }

            .m-sm-n2 {
                margin: -0.5rem !important;
            }

            .m-sm-n3 {
                margin: -1rem !important;
            }

            .m-sm-n4 {
                margin: -1.6rem !important;
            }

            .m-sm-n5 {
                margin: -3rem !important;
            }

            .m-sm-n6 {
                margin: -3.5rem !important;
            }

            .m-sm-n7 {
                margin: -6rem !important;
            }

            .m-sm-n8 {
                margin: -7rem !important;
            }

            .m-sm-n9 {
                margin: -10rem !important;
            }

            .mx-sm-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-sm-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-sm-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-sm-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }

            .mx-sm-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }

            .mx-sm-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }

            .mx-sm-n7 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-sm-n8 {
                margin-right: -7rem !important;
                margin-left: -7rem !important;
            }

            .mx-sm-n9 {
                margin-right: -10rem !important;
                margin-left: -10rem !important;
            }

            .my-sm-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-sm-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-sm-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-sm-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }

            .my-sm-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .my-sm-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }

            .my-sm-n7 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-sm-n8 {
                margin-top: -7rem !important;
                margin-bottom: -7rem !important;
            }

            .my-sm-n9 {
                margin-top: -10rem !important;
                margin-bottom: -10rem !important;
            }

            .mt-sm-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-sm-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-sm-n3 {
                margin-top: -1rem !important;
            }

            .mt-sm-n4 {
                margin-top: -1.6rem !important;
            }

            .mt-sm-n5 {
                margin-top: -3rem !important;
            }

            .mt-sm-n6 {
                margin-top: -3.5rem !important;
            }

            .mt-sm-n7 {
                margin-top: -6rem !important;
            }

            .mt-sm-n8 {
                margin-top: -7rem !important;
            }

            .mt-sm-n9 {
                margin-top: -10rem !important;
            }

            .me-sm-n1 {
                margin-right: -0.25rem !important;
            }

            .me-sm-n2 {
                margin-right: -0.5rem !important;
            }

            .me-sm-n3 {
                margin-right: -1rem !important;
            }

            .me-sm-n4 {
                margin-right: -1.6rem !important;
            }

            .me-sm-n5 {
                margin-right: -3rem !important;
            }

            .me-sm-n6 {
                margin-right: -3.5rem !important;
            }

            .me-sm-n7 {
                margin-right: -6rem !important;
            }

            .me-sm-n8 {
                margin-right: -7rem !important;
            }

            .me-sm-n9 {
                margin-right: -10rem !important;
            }

            .mb-sm-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-sm-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-sm-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-sm-n4 {
                margin-bottom: -1.6rem !important;
            }

            .mb-sm-n5 {
                margin-bottom: -3rem !important;
            }

            .mb-sm-n6 {
                margin-bottom: -3.5rem !important;
            }

            .mb-sm-n7 {
                margin-bottom: -6rem !important;
            }

            .mb-sm-n8 {
                margin-bottom: -7rem !important;
            }

            .mb-sm-n9 {
                margin-bottom: -10rem !important;
            }

            .ms-sm-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-sm-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-sm-n3 {
                margin-left: -1rem !important;
            }

            .ms-sm-n4 {
                margin-left: -1.6rem !important;
            }

            .ms-sm-n5 {
                margin-left: -3rem !important;
            }

            .ms-sm-n6 {
                margin-left: -3.5rem !important;
            }

            .ms-sm-n7 {
                margin-left: -6rem !important;
            }

            .ms-sm-n8 {
                margin-left: -7rem !important;
            }

            .ms-sm-n9 {
                margin-left: -10rem !important;
            }

            .p-sm-0 {
                padding: 0 !important;
            }

            .p-sm-1 {
                padding: 0.25rem !important;
            }

            .p-sm-2 {
                padding: 0.5rem !important;
            }

            .p-sm-3 {
                padding: 1rem !important;
            }

            .p-sm-4 {
                padding: 1.6rem !important;
            }

            .p-sm-5 {
                padding: 3rem !important;
            }

            .p-sm-6 {
                padding: 3.5rem !important;
            }

            .p-sm-7 {
                padding: 6rem !important;
            }

            .p-sm-8 {
                padding: 7rem !important;
            }

            .p-sm-9 {
                padding: 10rem !important;
            }

            .px-sm-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-sm-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-sm-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-sm-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-sm-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }

            .px-sm-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .px-sm-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }

            .px-sm-7 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-sm-8 {
                padding-right: 7rem !important;
                padding-left: 7rem !important;
            }

            .px-sm-9 {
                padding-right: 10rem !important;
                padding-left: 10rem !important;
            }

            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-sm-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-sm-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-sm-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }

            .py-sm-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .py-sm-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }

            .py-sm-7 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-sm-8 {
                padding-top: 7rem !important;
                padding-bottom: 7rem !important;
            }

            .py-sm-9 {
                padding-top: 10rem !important;
                padding-bottom: 10rem !important;
            }

            .pt-sm-0 {
                padding-top: 0 !important;
            }

            .pt-sm-1 {
                padding-top: 0.25rem !important;
            }

            .pt-sm-2 {
                padding-top: 0.5rem !important;
            }

            .pt-sm-3 {
                padding-top: 1rem !important;
            }

            .pt-sm-4 {
                padding-top: 1.6rem !important;
            }

            .pt-sm-5 {
                padding-top: 3rem !important;
            }

            .pt-sm-6 {
                padding-top: 3.5rem !important;
            }

            .pt-sm-7 {
                padding-top: 6rem !important;
            }

            .pt-sm-8 {
                padding-top: 7rem !important;
            }

            .pt-sm-9 {
                padding-top: 10rem !important;
            }

            .pe-sm-0 {
                padding-right: 0 !important;
            }

            .pe-sm-1 {
                padding-right: 0.25rem !important;
            }

            .pe-sm-2 {
                padding-right: 0.5rem !important;
            }

            .pe-sm-3 {
                padding-right: 1rem !important;
            }

            .pe-sm-4 {
                padding-right: 1.6rem !important;
            }

            .pe-sm-5 {
                padding-right: 3rem !important;
            }

            .pe-sm-6 {
                padding-right: 3.5rem !important;
            }

            .pe-sm-7 {
                padding-right: 6rem !important;
            }

            .pe-sm-8 {
                padding-right: 7rem !important;
            }

            .pe-sm-9 {
                padding-right: 10rem !important;
            }

            .pb-sm-0 {
                padding-bottom: 0 !important;
            }

            .pb-sm-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-sm-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-sm-3 {
                padding-bottom: 1rem !important;
            }

            .pb-sm-4 {
                padding-bottom: 1.6rem !important;
            }

            .pb-sm-5 {
                padding-bottom: 3rem !important;
            }

            .pb-sm-6 {
                padding-bottom: 3.5rem !important;
            }

            .pb-sm-7 {
                padding-bottom: 6rem !important;
            }

            .pb-sm-8 {
                padding-bottom: 7rem !important;
            }

            .pb-sm-9 {
                padding-bottom: 10rem !important;
            }

            .ps-sm-0 {
                padding-left: 0 !important;
            }

            .ps-sm-1 {
                padding-left: 0.25rem !important;
            }

            .ps-sm-2 {
                padding-left: 0.5rem !important;
            }

            .ps-sm-3 {
                padding-left: 1rem !important;
            }

            .ps-sm-4 {
                padding-left: 1.6rem !important;
            }

            .ps-sm-5 {
                padding-left: 3rem !important;
            }

            .ps-sm-6 {
                padding-left: 3.5rem !important;
            }

            .ps-sm-7 {
                padding-left: 6rem !important;
            }

            .ps-sm-8 {
                padding-left: 7rem !important;
            }

            .ps-sm-9 {
                padding-left: 10rem !important;
            }

            .text-sm-start {
                text-align: left !important;
            }

            .text-sm-end {
                text-align: right !important;
            }

            .text-sm-center {
                text-align: center !important;
            }
        }
        @media (min-width: 768px) {
            .float-md-start {
                float: left !important;
            }

            .float-md-end {
                float: right !important;
            }

            .float-md-none {
                float: none !important;
            }

            .d-md-inline {
                display: inline !important;
            }

            .d-md-inline-block {
                display: inline-block !important;
            }

            .d-md-block {
                display: block !important;
            }

            .d-md-grid {
                display: grid !important;
            }

            .d-md-table {
                display: table !important;
            }

            .d-md-table-row {
                display: table-row !important;
            }

            .d-md-table-cell {
                display: table-cell !important;
            }

            .d-md-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-md-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-md-none {
                display: none !important;
            }

            .flex-md-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-md-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-md-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-md-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-md-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-md-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-md-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-md-0 {
                gap: 0 !important;
            }

            .gap-md-1 {
                gap: 0.25rem !important;
            }

            .gap-md-2 {
                gap: 0.5rem !important;
            }

            .gap-md-3 {
                gap: 1rem !important;
            }

            .gap-md-4 {
                gap: 1.6rem !important;
            }

            .gap-md-5 {
                gap: 3rem !important;
            }

            .gap-md-6 {
                gap: 3.5rem !important;
            }

            .gap-md-7 {
                gap: 6rem !important;
            }

            .gap-md-8 {
                gap: 7rem !important;
            }

            .gap-md-9 {
                gap: 10rem !important;
            }

            .justify-content-md-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-md-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-md-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-md-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-md-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-md-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-md-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-md-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-md-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-md-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-md-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-md-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-md-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-md-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-md-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-md-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-md-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-md-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-md-0 {
                margin: 0 !important;
            }

            .m-md-1 {
                margin: 0.25rem !important;
            }

            .m-md-2 {
                margin: 0.5rem !important;
            }

            .m-md-3 {
                margin: 1rem !important;
            }

            .m-md-4 {
                margin: 1.6rem !important;
            }

            .m-md-5 {
                margin: 3rem !important;
            }

            .m-md-6 {
                margin: 3.5rem !important;
            }

            .m-md-7 {
                margin: 6rem !important;
            }

            .m-md-8 {
                margin: 7rem !important;
            }

            .m-md-9 {
                margin: 10rem !important;
            }

            .m-md-auto {
                margin: auto !important;
            }

            .mx-md-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-md-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-md-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-md-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-md-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }

            .mx-md-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-md-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }

            .mx-md-7 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-md-8 {
                margin-right: 7rem !important;
                margin-left: 7rem !important;
            }

            .mx-md-9 {
                margin-right: 10rem !important;
                margin-left: 10rem !important;
            }

            .mx-md-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-md-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-md-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-md-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }

            .my-md-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-md-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }

            .my-md-7 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-md-8 {
                margin-top: 7rem !important;
                margin-bottom: 7rem !important;
            }

            .my-md-9 {
                margin-top: 10rem !important;
                margin-bottom: 10rem !important;
            }

            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-md-0 {
                margin-top: 0 !important;
            }

            .mt-md-1 {
                margin-top: 0.25rem !important;
            }

            .mt-md-2 {
                margin-top: 0.5rem !important;
            }

            .mt-md-3 {
                margin-top: 1rem !important;
            }

            .mt-md-4 {
                margin-top: 1.6rem !important;
            }

            .mt-md-5 {
                margin-top: 3rem !important;
            }

            .mt-md-6 {
                margin-top: 3.5rem !important;
            }

            .mt-md-7 {
                margin-top: 6rem !important;
            }

            .mt-md-8 {
                margin-top: 7rem !important;
            }

            .mt-md-9 {
                margin-top: 10rem !important;
            }

            .mt-md-auto {
                margin-top: auto !important;
            }

            .me-md-0 {
                margin-right: 0 !important;
            }

            .me-md-1 {
                margin-right: 0.25rem !important;
            }

            .me-md-2 {
                margin-right: 0.5rem !important;
            }

            .me-md-3 {
                margin-right: 1rem !important;
            }

            .me-md-4 {
                margin-right: 1.6rem !important;
            }

            .me-md-5 {
                margin-right: 3rem !important;
            }

            .me-md-6 {
                margin-right: 3.5rem !important;
            }

            .me-md-7 {
                margin-right: 6rem !important;
            }

            .me-md-8 {
                margin-right: 7rem !important;
            }

            .me-md-9 {
                margin-right: 10rem !important;
            }

            .me-md-auto {
                margin-right: auto !important;
            }

            .mb-md-0 {
                margin-bottom: 0 !important;
            }

            .mb-md-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-md-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-md-3 {
                margin-bottom: 1rem !important;
            }

            .mb-md-4 {
                margin-bottom: 1.6rem !important;
            }

            .mb-md-5 {
                margin-bottom: 3rem !important;
            }

            .mb-md-6 {
                margin-bottom: 3.5rem !important;
            }

            .mb-md-7 {
                margin-bottom: 6rem !important;
            }

            .mb-md-8 {
                margin-bottom: 7rem !important;
            }

            .mb-md-9 {
                margin-bottom: 10rem !important;
            }

            .mb-md-auto {
                margin-bottom: auto !important;
            }

            .ms-md-0 {
                margin-left: 0 !important;
            }

            .ms-md-1 {
                margin-left: 0.25rem !important;
            }

            .ms-md-2 {
                margin-left: 0.5rem !important;
            }

            .ms-md-3 {
                margin-left: 1rem !important;
            }

            .ms-md-4 {
                margin-left: 1.6rem !important;
            }

            .ms-md-5 {
                margin-left: 3rem !important;
            }

            .ms-md-6 {
                margin-left: 3.5rem !important;
            }

            .ms-md-7 {
                margin-left: 6rem !important;
            }

            .ms-md-8 {
                margin-left: 7rem !important;
            }

            .ms-md-9 {
                margin-left: 10rem !important;
            }

            .ms-md-auto {
                margin-left: auto !important;
            }

            .m-md-n1 {
                margin: -0.25rem !important;
            }

            .m-md-n2 {
                margin: -0.5rem !important;
            }

            .m-md-n3 {
                margin: -1rem !important;
            }

            .m-md-n4 {
                margin: -1.6rem !important;
            }

            .m-md-n5 {
                margin: -3rem !important;
            }

            .m-md-n6 {
                margin: -3.5rem !important;
            }

            .m-md-n7 {
                margin: -6rem !important;
            }

            .m-md-n8 {
                margin: -7rem !important;
            }

            .m-md-n9 {
                margin: -10rem !important;
            }

            .mx-md-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-md-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-md-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-md-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }

            .mx-md-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }

            .mx-md-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }

            .mx-md-n7 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-md-n8 {
                margin-right: -7rem !important;
                margin-left: -7rem !important;
            }

            .mx-md-n9 {
                margin-right: -10rem !important;
                margin-left: -10rem !important;
            }

            .my-md-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-md-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-md-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-md-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }

            .my-md-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .my-md-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }

            .my-md-n7 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-md-n8 {
                margin-top: -7rem !important;
                margin-bottom: -7rem !important;
            }

            .my-md-n9 {
                margin-top: -10rem !important;
                margin-bottom: -10rem !important;
            }

            .mt-md-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-md-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-md-n3 {
                margin-top: -1rem !important;
            }

            .mt-md-n4 {
                margin-top: -1.6rem !important;
            }

            .mt-md-n5 {
                margin-top: -3rem !important;
            }

            .mt-md-n6 {
                margin-top: -3.5rem !important;
            }

            .mt-md-n7 {
                margin-top: -6rem !important;
            }

            .mt-md-n8 {
                margin-top: -7rem !important;
            }

            .mt-md-n9 {
                margin-top: -10rem !important;
            }

            .me-md-n1 {
                margin-right: -0.25rem !important;
            }

            .me-md-n2 {
                margin-right: -0.5rem !important;
            }

            .me-md-n3 {
                margin-right: -1rem !important;
            }

            .me-md-n4 {
                margin-right: -1.6rem !important;
            }

            .me-md-n5 {
                margin-right: -3rem !important;
            }

            .me-md-n6 {
                margin-right: -3.5rem !important;
            }

            .me-md-n7 {
                margin-right: -6rem !important;
            }

            .me-md-n8 {
                margin-right: -7rem !important;
            }

            .me-md-n9 {
                margin-right: -10rem !important;
            }

            .mb-md-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-md-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-md-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-md-n4 {
                margin-bottom: -1.6rem !important;
            }

            .mb-md-n5 {
                margin-bottom: -3rem !important;
            }

            .mb-md-n6 {
                margin-bottom: -3.5rem !important;
            }

            .mb-md-n7 {
                margin-bottom: -6rem !important;
            }

            .mb-md-n8 {
                margin-bottom: -7rem !important;
            }

            .mb-md-n9 {
                margin-bottom: -10rem !important;
            }

            .ms-md-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-md-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-md-n3 {
                margin-left: -1rem !important;
            }

            .ms-md-n4 {
                margin-left: -1.6rem !important;
            }

            .ms-md-n5 {
                margin-left: -3rem !important;
            }

            .ms-md-n6 {
                margin-left: -3.5rem !important;
            }

            .ms-md-n7 {
                margin-left: -6rem !important;
            }

            .ms-md-n8 {
                margin-left: -7rem !important;
            }

            .ms-md-n9 {
                margin-left: -10rem !important;
            }

            .p-md-0 {
                padding: 0 !important;
            }

            .p-md-1 {
                padding: 0.25rem !important;
            }

            .p-md-2 {
                padding: 0.5rem !important;
            }

            .p-md-3 {
                padding: 1rem !important;
            }

            .p-md-4 {
                padding: 1.6rem !important;
            }

            .p-md-5 {
                padding: 3rem !important;
            }

            .p-md-6 {
                padding: 3.5rem !important;
            }

            .p-md-7 {
                padding: 6rem !important;
            }

            .p-md-8 {
                padding: 7rem !important;
            }

            .p-md-9 {
                padding: 10rem !important;
            }

            .px-md-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-md-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-md-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-md-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-md-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }

            .px-md-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .px-md-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }

            .px-md-7 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-md-8 {
                padding-right: 7rem !important;
                padding-left: 7rem !important;
            }

            .px-md-9 {
                padding-right: 10rem !important;
                padding-left: 10rem !important;
            }

            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-md-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-md-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-md-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }

            .py-md-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .py-md-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }

            .py-md-7 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-md-8 {
                padding-top: 7rem !important;
                padding-bottom: 7rem !important;
            }

            .py-md-9 {
                padding-top: 10rem !important;
                padding-bottom: 10rem !important;
            }

            .pt-md-0 {
                padding-top: 0 !important;
            }

            .pt-md-1 {
                padding-top: 0.25rem !important;
            }

            .pt-md-2 {
                padding-top: 0.5rem !important;
            }

            .pt-md-3 {
                padding-top: 1rem !important;
            }

            .pt-md-4 {
                padding-top: 1.6rem !important;
            }

            .pt-md-5 {
                padding-top: 3rem !important;
            }

            .pt-md-6 {
                padding-top: 3.5rem !important;
            }

            .pt-md-7 {
                padding-top: 6rem !important;
            }

            .pt-md-8 {
                padding-top: 7rem !important;
            }

            .pt-md-9 {
                padding-top: 10rem !important;
            }

            .pe-md-0 {
                padding-right: 0 !important;
            }

            .pe-md-1 {
                padding-right: 0.25rem !important;
            }

            .pe-md-2 {
                padding-right: 0.5rem !important;
            }

            .pe-md-3 {
                padding-right: 1rem !important;
            }

            .pe-md-4 {
                padding-right: 1.6rem !important;
            }

            .pe-md-5 {
                padding-right: 3rem !important;
            }

            .pe-md-6 {
                padding-right: 3.5rem !important;
            }

            .pe-md-7 {
                padding-right: 6rem !important;
            }

            .pe-md-8 {
                padding-right: 7rem !important;
            }

            .pe-md-9 {
                padding-right: 10rem !important;
            }

            .pb-md-0 {
                padding-bottom: 0 !important;
            }

            .pb-md-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-md-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-md-3 {
                padding-bottom: 1rem !important;
            }

            .pb-md-4 {
                padding-bottom: 1.6rem !important;
            }

            .pb-md-5 {
                padding-bottom: 3rem !important;
            }

            .pb-md-6 {
                padding-bottom: 3.5rem !important;
            }

            .pb-md-7 {
                padding-bottom: 6rem !important;
            }

            .pb-md-8 {
                padding-bottom: 7rem !important;
            }

            .pb-md-9 {
                padding-bottom: 10rem !important;
            }

            .ps-md-0 {
                padding-left: 0 !important;
            }

            .ps-md-1 {
                padding-left: 0.25rem !important;
            }

            .ps-md-2 {
                padding-left: 0.5rem !important;
            }

            .ps-md-3 {
                padding-left: 1rem !important;
            }

            .ps-md-4 {
                padding-left: 1.6rem !important;
            }

            .ps-md-5 {
                padding-left: 3rem !important;
            }

            .ps-md-6 {
                padding-left: 3.5rem !important;
            }

            .ps-md-7 {
                padding-left: 6rem !important;
            }

            .ps-md-8 {
                padding-left: 7rem !important;
            }

            .ps-md-9 {
                padding-left: 10rem !important;
            }

            .text-md-start {
                text-align: left !important;
            }

            .text-md-end {
                text-align: right !important;
            }

            .text-md-center {
                text-align: center !important;
            }
        }
        @media (min-width: 992px) {
            .float-lg-start {
                float: left !important;
            }

            .float-lg-end {
                float: right !important;
            }

            .float-lg-none {
                float: none !important;
            }

            .d-lg-inline {
                display: inline !important;
            }

            .d-lg-inline-block {
                display: inline-block !important;
            }

            .d-lg-block {
                display: block !important;
            }

            .d-lg-grid {
                display: grid !important;
            }

            .d-lg-table {
                display: table !important;
            }

            .d-lg-table-row {
                display: table-row !important;
            }

            .d-lg-table-cell {
                display: table-cell !important;
            }

            .d-lg-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-lg-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-lg-none {
                display: none !important;
            }

            .flex-lg-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-lg-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-lg-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-lg-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-lg-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-lg-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-lg-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-lg-0 {
                gap: 0 !important;
            }

            .gap-lg-1 {
                gap: 0.25rem !important;
            }

            .gap-lg-2 {
                gap: 0.5rem !important;
            }

            .gap-lg-3 {
                gap: 1rem !important;
            }

            .gap-lg-4 {
                gap: 1.6rem !important;
            }

            .gap-lg-5 {
                gap: 3rem !important;
            }

            .gap-lg-6 {
                gap: 3.5rem !important;
            }

            .gap-lg-7 {
                gap: 6rem !important;
            }

            .gap-lg-8 {
                gap: 7rem !important;
            }

            .gap-lg-9 {
                gap: 10rem !important;
            }

            .justify-content-lg-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-lg-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-lg-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-lg-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-lg-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-lg-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-lg-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-lg-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-lg-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-lg-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-lg-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-lg-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-lg-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-lg-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-lg-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-lg-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-lg-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-lg-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-lg-0 {
                margin: 0 !important;
            }

            .m-lg-1 {
                margin: 0.25rem !important;
            }

            .m-lg-2 {
                margin: 0.5rem !important;
            }

            .m-lg-3 {
                margin: 1rem !important;
            }

            .m-lg-4 {
                margin: 1.6rem !important;
            }

            .m-lg-5 {
                margin: 3rem !important;
            }

            .m-lg-6 {
                margin: 3.5rem !important;
            }

            .m-lg-7 {
                margin: 6rem !important;
            }

            .m-lg-8 {
                margin: 7rem !important;
            }

            .m-lg-9 {
                margin: 10rem !important;
            }

            .m-lg-auto {
                margin: auto !important;
            }

            .mx-lg-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-lg-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-lg-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-lg-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-lg-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }

            .mx-lg-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-lg-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }

            .mx-lg-7 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-lg-8 {
                margin-right: 7rem !important;
                margin-left: 7rem !important;
            }

            .mx-lg-9 {
                margin-right: 10rem !important;
                margin-left: 10rem !important;
            }

            .mx-lg-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-lg-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-lg-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-lg-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }

            .my-lg-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-lg-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }

            .my-lg-7 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-lg-8 {
                margin-top: 7rem !important;
                margin-bottom: 7rem !important;
            }

            .my-lg-9 {
                margin-top: 10rem !important;
                margin-bottom: 10rem !important;
            }

            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-lg-0 {
                margin-top: 0 !important;
            }

            .mt-lg-1 {
                margin-top: 0.25rem !important;
            }

            .mt-lg-2 {
                margin-top: 0.5rem !important;
            }

            .mt-lg-3 {
                margin-top: 1rem !important;
            }

            .mt-lg-4 {
                margin-top: 1.6rem !important;
            }

            .mt-lg-5 {
                margin-top: 3rem !important;
            }

            .mt-lg-6 {
                margin-top: 3.5rem !important;
            }

            .mt-lg-7 {
                margin-top: 6rem !important;
            }

            .mt-lg-8 {
                margin-top: 7rem !important;
            }

            .mt-lg-9 {
                margin-top: 10rem !important;
            }

            .mt-lg-auto {
                margin-top: auto !important;
            }

            .me-lg-0 {
                margin-right: 0 !important;
            }

            .me-lg-1 {
                margin-right: 0.25rem !important;
            }

            .me-lg-2 {
                margin-right: 0.5rem !important;
            }

            .me-lg-3 {
                margin-right: 1rem !important;
            }

            .me-lg-4 {
                margin-right: 1.6rem !important;
            }

            .me-lg-5 {
                margin-right: 3rem !important;
            }

            .me-lg-6 {
                margin-right: 3.5rem !important;
            }

            .me-lg-7 {
                margin-right: 6rem !important;
            }

            .me-lg-8 {
                margin-right: 7rem !important;
            }

            .me-lg-9 {
                margin-right: 10rem !important;
            }

            .me-lg-auto {
                margin-right: auto !important;
            }

            .mb-lg-0 {
                margin-bottom: 0 !important;
            }

            .mb-lg-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-lg-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-lg-3 {
                margin-bottom: 1rem !important;
            }

            .mb-lg-4 {
                margin-bottom: 1.6rem !important;
            }

            .mb-lg-5 {
                margin-bottom: 3rem !important;
            }

            .mb-lg-6 {
                margin-bottom: 3.5rem !important;
            }

            .mb-lg-7 {
                margin-bottom: 6rem !important;
            }

            .mb-lg-8 {
                margin-bottom: 7rem !important;
            }

            .mb-lg-9 {
                margin-bottom: 10rem !important;
            }

            .mb-lg-auto {
                margin-bottom: auto !important;
            }

            .ms-lg-0 {
                margin-left: 0 !important;
            }

            .ms-lg-1 {
                margin-left: 0.25rem !important;
            }

            .ms-lg-2 {
                margin-left: 0.5rem !important;
            }

            .ms-lg-3 {
                margin-left: 1rem !important;
            }

            .ms-lg-4 {
                margin-left: 1.6rem !important;
            }

            .ms-lg-5 {
                margin-left: 3rem !important;
            }

            .ms-lg-6 {
                margin-left: 3.5rem !important;
            }

            .ms-lg-7 {
                margin-left: 6rem !important;
            }

            .ms-lg-8 {
                margin-left: 7rem !important;
            }

            .ms-lg-9 {
                margin-left: 10rem !important;
            }

            .ms-lg-auto {
                margin-left: auto !important;
            }

            .m-lg-n1 {
                margin: -0.25rem !important;
            }

            .m-lg-n2 {
                margin: -0.5rem !important;
            }

            .m-lg-n3 {
                margin: -1rem !important;
            }

            .m-lg-n4 {
                margin: -1.6rem !important;
            }

            .m-lg-n5 {
                margin: -3rem !important;
            }

            .m-lg-n6 {
                margin: -3.5rem !important;
            }

            .m-lg-n7 {
                margin: -6rem !important;
            }

            .m-lg-n8 {
                margin: -7rem !important;
            }

            .m-lg-n9 {
                margin: -10rem !important;
            }

            .mx-lg-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-lg-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-lg-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-lg-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }

            .mx-lg-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }

            .mx-lg-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }

            .mx-lg-n7 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-lg-n8 {
                margin-right: -7rem !important;
                margin-left: -7rem !important;
            }

            .mx-lg-n9 {
                margin-right: -10rem !important;
                margin-left: -10rem !important;
            }

            .my-lg-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-lg-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-lg-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-lg-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }

            .my-lg-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .my-lg-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }

            .my-lg-n7 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-lg-n8 {
                margin-top: -7rem !important;
                margin-bottom: -7rem !important;
            }

            .my-lg-n9 {
                margin-top: -10rem !important;
                margin-bottom: -10rem !important;
            }

            .mt-lg-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-lg-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-lg-n3 {
                margin-top: -1rem !important;
            }

            .mt-lg-n4 {
                margin-top: -1.6rem !important;
            }

            .mt-lg-n5 {
                margin-top: -3rem !important;
            }

            .mt-lg-n6 {
                margin-top: -3.5rem !important;
            }

            .mt-lg-n7 {
                margin-top: -6rem !important;
            }

            .mt-lg-n8 {
                margin-top: -7rem !important;
            }

            .mt-lg-n9 {
                margin-top: -10rem !important;
            }

            .me-lg-n1 {
                margin-right: -0.25rem !important;
            }

            .me-lg-n2 {
                margin-right: -0.5rem !important;
            }

            .me-lg-n3 {
                margin-right: -1rem !important;
            }

            .me-lg-n4 {
                margin-right: -1.6rem !important;
            }

            .me-lg-n5 {
                margin-right: -3rem !important;
            }

            .me-lg-n6 {
                margin-right: -3.5rem !important;
            }

            .me-lg-n7 {
                margin-right: -6rem !important;
            }

            .me-lg-n8 {
                margin-right: -7rem !important;
            }

            .me-lg-n9 {
                margin-right: -10rem !important;
            }

            .mb-lg-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-lg-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-lg-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-lg-n4 {
                margin-bottom: -1.6rem !important;
            }

            .mb-lg-n5 {
                margin-bottom: -3rem !important;
            }

            .mb-lg-n6 {
                margin-bottom: -3.5rem !important;
            }

            .mb-lg-n7 {
                margin-bottom: -6rem !important;
            }

            .mb-lg-n8 {
                margin-bottom: -7rem !important;
            }

            .mb-lg-n9 {
                margin-bottom: -10rem !important;
            }

            .ms-lg-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-lg-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-lg-n3 {
                margin-left: -1rem !important;
            }

            .ms-lg-n4 {
                margin-left: -1.6rem !important;
            }

            .ms-lg-n5 {
                margin-left: -3rem !important;
            }

            .ms-lg-n6 {
                margin-left: -3.5rem !important;
            }

            .ms-lg-n7 {
                margin-left: -6rem !important;
            }

            .ms-lg-n8 {
                margin-left: -7rem !important;
            }

            .ms-lg-n9 {
                margin-left: -10rem !important;
            }

            .p-lg-0 {
                padding: 0 !important;
            }

            .p-lg-1 {
                padding: 0.25rem !important;
            }

            .p-lg-2 {
                padding: 0.5rem !important;
            }

            .p-lg-3 {
                padding: 1rem !important;
            }

            .p-lg-4 {
                padding: 1.6rem !important;
            }

            .p-lg-5 {
                padding: 3rem !important;
            }

            .p-lg-6 {
                padding: 3.5rem !important;
            }

            .p-lg-7 {
                padding: 6rem !important;
            }

            .p-lg-8 {
                padding: 7rem !important;
            }

            .p-lg-9 {
                padding: 10rem !important;
            }

            .px-lg-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-lg-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-lg-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-lg-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-lg-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }

            .px-lg-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .px-lg-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }

            .px-lg-7 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-lg-8 {
                padding-right: 7rem !important;
                padding-left: 7rem !important;
            }

            .px-lg-9 {
                padding-right: 10rem !important;
                padding-left: 10rem !important;
            }

            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-lg-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-lg-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-lg-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }

            .py-lg-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .py-lg-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }

            .py-lg-7 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-lg-8 {
                padding-top: 7rem !important;
                padding-bottom: 7rem !important;
            }

            .py-lg-9 {
                padding-top: 10rem !important;
                padding-bottom: 10rem !important;
            }

            .pt-lg-0 {
                padding-top: 0 !important;
            }

            .pt-lg-1 {
                padding-top: 0.25rem !important;
            }

            .pt-lg-2 {
                padding-top: 0.5rem !important;
            }

            .pt-lg-3 {
                padding-top: 1rem !important;
            }

            .pt-lg-4 {
                padding-top: 1.6rem !important;
            }

            .pt-lg-5 {
                padding-top: 3rem !important;
            }

            .pt-lg-6 {
                padding-top: 3.5rem !important;
            }

            .pt-lg-7 {
                padding-top: 6rem !important;
            }

            .pt-lg-8 {
                padding-top: 7rem !important;
            }

            .pt-lg-9 {
                padding-top: 10rem !important;
            }

            .pe-lg-0 {
                padding-right: 0 !important;
            }

            .pe-lg-1 {
                padding-right: 0.25rem !important;
            }

            .pe-lg-2 {
                padding-right: 0.5rem !important;
            }

            .pe-lg-3 {
                padding-right: 1rem !important;
            }

            .pe-lg-4 {
                padding-right: 1.6rem !important;
            }

            .pe-lg-5 {
                padding-right: 3rem !important;
            }

            .pe-lg-6 {
                padding-right: 3.5rem !important;
            }

            .pe-lg-7 {
                padding-right: 6rem !important;
            }

            .pe-lg-8 {
                padding-right: 7rem !important;
            }

            .pe-lg-9 {
                padding-right: 10rem !important;
            }

            .pb-lg-0 {
                padding-bottom: 0 !important;
            }

            .pb-lg-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-lg-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-lg-3 {
                padding-bottom: 1rem !important;
            }

            .pb-lg-4 {
                padding-bottom: 1.6rem !important;
            }

            .pb-lg-5 {
                padding-bottom: 3rem !important;
            }

            .pb-lg-6 {
                padding-bottom: 3.5rem !important;
            }

            .pb-lg-7 {
                padding-bottom: 6rem !important;
            }

            .pb-lg-8 {
                padding-bottom: 7rem !important;
            }

            .pb-lg-9 {
                padding-bottom: 10rem !important;
            }

            .ps-lg-0 {
                padding-left: 0 !important;
            }

            .ps-lg-1 {
                padding-left: 0.25rem !important;
            }

            .ps-lg-2 {
                padding-left: 0.5rem !important;
            }

            .ps-lg-3 {
                padding-left: 1rem !important;
            }

            .ps-lg-4 {
                padding-left: 1.6rem !important;
            }

            .ps-lg-5 {
                padding-left: 3rem !important;
            }

            .ps-lg-6 {
                padding-left: 3.5rem !important;
            }

            .ps-lg-7 {
                padding-left: 6rem !important;
            }

            .ps-lg-8 {
                padding-left: 7rem !important;
            }

            .ps-lg-9 {
                padding-left: 10rem !important;
            }

            .text-lg-start {
                text-align: left !important;
            }

            .text-lg-end {
                text-align: right !important;
            }

            .text-lg-center {
                text-align: center !important;
            }
        }
        @media (min-width: 1200px) {
            .float-xl-start {
                float: left !important;
            }

            .float-xl-end {
                float: right !important;
            }

            .float-xl-none {
                float: none !important;
            }

            .d-xl-inline {
                display: inline !important;
            }

            .d-xl-inline-block {
                display: inline-block !important;
            }

            .d-xl-block {
                display: block !important;
            }

            .d-xl-grid {
                display: grid !important;
            }

            .d-xl-table {
                display: table !important;
            }

            .d-xl-table-row {
                display: table-row !important;
            }

            .d-xl-table-cell {
                display: table-cell !important;
            }

            .d-xl-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-xl-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-xl-none {
                display: none !important;
            }

            .flex-xl-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-xl-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-xl-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-xl-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-xl-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-xl-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-xl-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-xl-0 {
                gap: 0 !important;
            }

            .gap-xl-1 {
                gap: 0.25rem !important;
            }

            .gap-xl-2 {
                gap: 0.5rem !important;
            }

            .gap-xl-3 {
                gap: 1rem !important;
            }

            .gap-xl-4 {
                gap: 1.6rem !important;
            }

            .gap-xl-5 {
                gap: 3rem !important;
            }

            .gap-xl-6 {
                gap: 3.5rem !important;
            }

            .gap-xl-7 {
                gap: 6rem !important;
            }

            .gap-xl-8 {
                gap: 7rem !important;
            }

            .gap-xl-9 {
                gap: 10rem !important;
            }

            .justify-content-xl-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-xl-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-xl-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-xl-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-xl-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-xl-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-xl-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-xl-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-xl-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-xl-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-xl-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-xl-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-xl-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-xl-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-xl-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-xl-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-xl-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-xl-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-xl-0 {
                margin: 0 !important;
            }

            .m-xl-1 {
                margin: 0.25rem !important;
            }

            .m-xl-2 {
                margin: 0.5rem !important;
            }

            .m-xl-3 {
                margin: 1rem !important;
            }

            .m-xl-4 {
                margin: 1.6rem !important;
            }

            .m-xl-5 {
                margin: 3rem !important;
            }

            .m-xl-6 {
                margin: 3.5rem !important;
            }

            .m-xl-7 {
                margin: 6rem !important;
            }

            .m-xl-8 {
                margin: 7rem !important;
            }

            .m-xl-9 {
                margin: 10rem !important;
            }

            .m-xl-auto {
                margin: auto !important;
            }

            .mx-xl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-xl-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-xl-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-xl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-xl-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }

            .mx-xl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-xl-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }

            .mx-xl-7 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-xl-8 {
                margin-right: 7rem !important;
                margin-left: 7rem !important;
            }

            .mx-xl-9 {
                margin-right: 10rem !important;
                margin-left: 10rem !important;
            }

            .mx-xl-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-xl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-xl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-xl-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }

            .my-xl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-xl-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }

            .my-xl-7 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-xl-8 {
                margin-top: 7rem !important;
                margin-bottom: 7rem !important;
            }

            .my-xl-9 {
                margin-top: 10rem !important;
                margin-bottom: 10rem !important;
            }

            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-xl-0 {
                margin-top: 0 !important;
            }

            .mt-xl-1 {
                margin-top: 0.25rem !important;
            }

            .mt-xl-2 {
                margin-top: 0.5rem !important;
            }

            .mt-xl-3 {
                margin-top: 1rem !important;
            }

            .mt-xl-4 {
                margin-top: 1.6rem !important;
            }

            .mt-xl-5 {
                margin-top: 3rem !important;
            }

            .mt-xl-6 {
                margin-top: 3.5rem !important;
            }

            .mt-xl-7 {
                margin-top: 6rem !important;
            }

            .mt-xl-8 {
                margin-top: 7rem !important;
            }

            .mt-xl-9 {
                margin-top: 10rem !important;
            }

            .mt-xl-auto {
                margin-top: auto !important;
            }

            .me-xl-0 {
                margin-right: 0 !important;
            }

            .me-xl-1 {
                margin-right: 0.25rem !important;
            }

            .me-xl-2 {
                margin-right: 0.5rem !important;
            }

            .me-xl-3 {
                margin-right: 1rem !important;
            }

            .me-xl-4 {
                margin-right: 1.6rem !important;
            }

            .me-xl-5 {
                margin-right: 3rem !important;
            }

            .me-xl-6 {
                margin-right: 3.5rem !important;
            }

            .me-xl-7 {
                margin-right: 6rem !important;
            }

            .me-xl-8 {
                margin-right: 7rem !important;
            }

            .me-xl-9 {
                margin-right: 10rem !important;
            }

            .me-xl-auto {
                margin-right: auto !important;
            }

            .mb-xl-0 {
                margin-bottom: 0 !important;
            }

            .mb-xl-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-xl-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-xl-3 {
                margin-bottom: 1rem !important;
            }

            .mb-xl-4 {
                margin-bottom: 1.6rem !important;
            }

            .mb-xl-5 {
                margin-bottom: 3rem !important;
            }

            .mb-xl-6 {
                margin-bottom: 3.5rem !important;
            }

            .mb-xl-7 {
                margin-bottom: 6rem !important;
            }

            .mb-xl-8 {
                margin-bottom: 7rem !important;
            }

            .mb-xl-9 {
                margin-bottom: 10rem !important;
            }

            .mb-xl-auto {
                margin-bottom: auto !important;
            }

            .ms-xl-0 {
                margin-left: 0 !important;
            }

            .ms-xl-1 {
                margin-left: 0.25rem !important;
            }

            .ms-xl-2 {
                margin-left: 0.5rem !important;
            }

            .ms-xl-3 {
                margin-left: 1rem !important;
            }

            .ms-xl-4 {
                margin-left: 1.6rem !important;
            }

            .ms-xl-5 {
                margin-left: 3rem !important;
            }

            .ms-xl-6 {
                margin-left: 3.5rem !important;
            }

            .ms-xl-7 {
                margin-left: 6rem !important;
            }

            .ms-xl-8 {
                margin-left: 7rem !important;
            }

            .ms-xl-9 {
                margin-left: 10rem !important;
            }

            .ms-xl-auto {
                margin-left: auto !important;
            }

            .m-xl-n1 {
                margin: -0.25rem !important;
            }

            .m-xl-n2 {
                margin: -0.5rem !important;
            }

            .m-xl-n3 {
                margin: -1rem !important;
            }

            .m-xl-n4 {
                margin: -1.6rem !important;
            }

            .m-xl-n5 {
                margin: -3rem !important;
            }

            .m-xl-n6 {
                margin: -3.5rem !important;
            }

            .m-xl-n7 {
                margin: -6rem !important;
            }

            .m-xl-n8 {
                margin: -7rem !important;
            }

            .m-xl-n9 {
                margin: -10rem !important;
            }

            .mx-xl-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-xl-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-xl-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-xl-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }

            .mx-xl-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }

            .mx-xl-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }

            .mx-xl-n7 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-xl-n8 {
                margin-right: -7rem !important;
                margin-left: -7rem !important;
            }

            .mx-xl-n9 {
                margin-right: -10rem !important;
                margin-left: -10rem !important;
            }

            .my-xl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-xl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-xl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-xl-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }

            .my-xl-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .my-xl-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }

            .my-xl-n7 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-xl-n8 {
                margin-top: -7rem !important;
                margin-bottom: -7rem !important;
            }

            .my-xl-n9 {
                margin-top: -10rem !important;
                margin-bottom: -10rem !important;
            }

            .mt-xl-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-xl-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-xl-n3 {
                margin-top: -1rem !important;
            }

            .mt-xl-n4 {
                margin-top: -1.6rem !important;
            }

            .mt-xl-n5 {
                margin-top: -3rem !important;
            }

            .mt-xl-n6 {
                margin-top: -3.5rem !important;
            }

            .mt-xl-n7 {
                margin-top: -6rem !important;
            }

            .mt-xl-n8 {
                margin-top: -7rem !important;
            }

            .mt-xl-n9 {
                margin-top: -10rem !important;
            }

            .me-xl-n1 {
                margin-right: -0.25rem !important;
            }

            .me-xl-n2 {
                margin-right: -0.5rem !important;
            }

            .me-xl-n3 {
                margin-right: -1rem !important;
            }

            .me-xl-n4 {
                margin-right: -1.6rem !important;
            }

            .me-xl-n5 {
                margin-right: -3rem !important;
            }

            .me-xl-n6 {
                margin-right: -3.5rem !important;
            }

            .me-xl-n7 {
                margin-right: -6rem !important;
            }

            .me-xl-n8 {
                margin-right: -7rem !important;
            }

            .me-xl-n9 {
                margin-right: -10rem !important;
            }

            .mb-xl-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-xl-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-xl-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-xl-n4 {
                margin-bottom: -1.6rem !important;
            }

            .mb-xl-n5 {
                margin-bottom: -3rem !important;
            }

            .mb-xl-n6 {
                margin-bottom: -3.5rem !important;
            }

            .mb-xl-n7 {
                margin-bottom: -6rem !important;
            }

            .mb-xl-n8 {
                margin-bottom: -7rem !important;
            }

            .mb-xl-n9 {
                margin-bottom: -10rem !important;
            }

            .ms-xl-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-xl-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-xl-n3 {
                margin-left: -1rem !important;
            }

            .ms-xl-n4 {
                margin-left: -1.6rem !important;
            }

            .ms-xl-n5 {
                margin-left: -3rem !important;
            }

            .ms-xl-n6 {
                margin-left: -3.5rem !important;
            }

            .ms-xl-n7 {
                margin-left: -6rem !important;
            }

            .ms-xl-n8 {
                margin-left: -7rem !important;
            }

            .ms-xl-n9 {
                margin-left: -10rem !important;
            }

            .p-xl-0 {
                padding: 0 !important;
            }

            .p-xl-1 {
                padding: 0.25rem !important;
            }

            .p-xl-2 {
                padding: 0.5rem !important;
            }

            .p-xl-3 {
                padding: 1rem !important;
            }

            .p-xl-4 {
                padding: 1.6rem !important;
            }

            .p-xl-5 {
                padding: 3rem !important;
            }

            .p-xl-6 {
                padding: 3.5rem !important;
            }

            .p-xl-7 {
                padding: 6rem !important;
            }

            .p-xl-8 {
                padding: 7rem !important;
            }

            .p-xl-9 {
                padding: 10rem !important;
            }

            .px-xl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-xl-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-xl-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-xl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-xl-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }

            .px-xl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .px-xl-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }

            .px-xl-7 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-xl-8 {
                padding-right: 7rem !important;
                padding-left: 7rem !important;
            }

            .px-xl-9 {
                padding-right: 10rem !important;
                padding-left: 10rem !important;
            }

            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-xl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-xl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-xl-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }

            .py-xl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .py-xl-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }

            .py-xl-7 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-xl-8 {
                padding-top: 7rem !important;
                padding-bottom: 7rem !important;
            }

            .py-xl-9 {
                padding-top: 10rem !important;
                padding-bottom: 10rem !important;
            }

            .pt-xl-0 {
                padding-top: 0 !important;
            }

            .pt-xl-1 {
                padding-top: 0.25rem !important;
            }

            .pt-xl-2 {
                padding-top: 0.5rem !important;
            }

            .pt-xl-3 {
                padding-top: 1rem !important;
            }

            .pt-xl-4 {
                padding-top: 1.6rem !important;
            }

            .pt-xl-5 {
                padding-top: 3rem !important;
            }

            .pt-xl-6 {
                padding-top: 3.5rem !important;
            }

            .pt-xl-7 {
                padding-top: 6rem !important;
            }

            .pt-xl-8 {
                padding-top: 7rem !important;
            }

            .pt-xl-9 {
                padding-top: 10rem !important;
            }

            .pe-xl-0 {
                padding-right: 0 !important;
            }

            .pe-xl-1 {
                padding-right: 0.25rem !important;
            }

            .pe-xl-2 {
                padding-right: 0.5rem !important;
            }

            .pe-xl-3 {
                padding-right: 1rem !important;
            }

            .pe-xl-4 {
                padding-right: 1.6rem !important;
            }

            .pe-xl-5 {
                padding-right: 3rem !important;
            }

            .pe-xl-6 {
                padding-right: 3.5rem !important;
            }

            .pe-xl-7 {
                padding-right: 6rem !important;
            }

            .pe-xl-8 {
                padding-right: 7rem !important;
            }

            .pe-xl-9 {
                padding-right: 10rem !important;
            }

            .pb-xl-0 {
                padding-bottom: 0 !important;
            }

            .pb-xl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-xl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-xl-3 {
                padding-bottom: 1rem !important;
            }

            .pb-xl-4 {
                padding-bottom: 1.6rem !important;
            }

            .pb-xl-5 {
                padding-bottom: 3rem !important;
            }

            .pb-xl-6 {
                padding-bottom: 3.5rem !important;
            }

            .pb-xl-7 {
                padding-bottom: 6rem !important;
            }

            .pb-xl-8 {
                padding-bottom: 7rem !important;
            }

            .pb-xl-9 {
                padding-bottom: 10rem !important;
            }

            .ps-xl-0 {
                padding-left: 0 !important;
            }

            .ps-xl-1 {
                padding-left: 0.25rem !important;
            }

            .ps-xl-2 {
                padding-left: 0.5rem !important;
            }

            .ps-xl-3 {
                padding-left: 1rem !important;
            }

            .ps-xl-4 {
                padding-left: 1.6rem !important;
            }

            .ps-xl-5 {
                padding-left: 3rem !important;
            }

            .ps-xl-6 {
                padding-left: 3.5rem !important;
            }

            .ps-xl-7 {
                padding-left: 6rem !important;
            }

            .ps-xl-8 {
                padding-left: 7rem !important;
            }

            .ps-xl-9 {
                padding-left: 10rem !important;
            }

            .text-xl-start {
                text-align: left !important;
            }

            .text-xl-end {
                text-align: right !important;
            }

            .text-xl-center {
                text-align: center !important;
            }
        }
        @media (min-width: 1400px) {
            .float-xxl-start {
                float: left !important;
            }

            .float-xxl-end {
                float: right !important;
            }

            .float-xxl-none {
                float: none !important;
            }

            .d-xxl-inline {
                display: inline !important;
            }

            .d-xxl-inline-block {
                display: inline-block !important;
            }

            .d-xxl-block {
                display: block !important;
            }

            .d-xxl-grid {
                display: grid !important;
            }

            .d-xxl-table {
                display: table !important;
            }

            .d-xxl-table-row {
                display: table-row !important;
            }

            .d-xxl-table-cell {
                display: table-cell !important;
            }

            .d-xxl-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-xxl-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-xxl-none {
                display: none !important;
            }

            .flex-xxl-fill {
                -webkit-box-flex: 1 !important;
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important;
            }

            .flex-xxl-row {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: row !important;
                flex-direction: row !important;
            }

            .flex-xxl-column {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: normal !important;
                -ms-flex-direction: column !important;
                flex-direction: column !important;
            }

            .flex-xxl-row-reverse {
                -webkit-box-orient: horizontal !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important;
            }

            .flex-xxl-column-reverse {
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important;
            }

            .flex-xxl-grow-0 {
                -webkit-box-flex: 0 !important;
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important;
            }

            .flex-xxl-grow-1 {
                -webkit-box-flex: 1 !important;
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important;
            }

            .flex-xxl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important;
            }

            .flex-xxl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important;
            }

            .flex-xxl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
            }

            .flex-xxl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important;
            }

            .flex-xxl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important;
            }

            .gap-xxl-0 {
                gap: 0 !important;
            }

            .gap-xxl-1 {
                gap: 0.25rem !important;
            }

            .gap-xxl-2 {
                gap: 0.5rem !important;
            }

            .gap-xxl-3 {
                gap: 1rem !important;
            }

            .gap-xxl-4 {
                gap: 1.6rem !important;
            }

            .gap-xxl-5 {
                gap: 3rem !important;
            }

            .gap-xxl-6 {
                gap: 3.5rem !important;
            }

            .gap-xxl-7 {
                gap: 6rem !important;
            }

            .gap-xxl-8 {
                gap: 7rem !important;
            }

            .gap-xxl-9 {
                gap: 10rem !important;
            }

            .justify-content-xxl-start {
                -webkit-box-pack: start !important;
                -ms-flex-pack: start !important;
                justify-content: flex-start !important;
            }

            .justify-content-xxl-end {
                -webkit-box-pack: end !important;
                -ms-flex-pack: end !important;
                justify-content: flex-end !important;
            }

            .justify-content-xxl-center {
                -webkit-box-pack: center !important;
                -ms-flex-pack: center !important;
                justify-content: center !important;
            }

            .justify-content-xxl-between {
                -webkit-box-pack: justify !important;
                -ms-flex-pack: justify !important;
                justify-content: space-between !important;
            }

            .justify-content-xxl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important;
            }

            .justify-content-xxl-evenly {
                -webkit-box-pack: space-evenly !important;
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important;
            }

            .align-items-xxl-start {
                -webkit-box-align: start !important;
                -ms-flex-align: start !important;
                align-items: flex-start !important;
            }

            .align-items-xxl-end {
                -webkit-box-align: end !important;
                -ms-flex-align: end !important;
                align-items: flex-end !important;
            }

            .align-items-xxl-center {
                -webkit-box-align: center !important;
                -ms-flex-align: center !important;
                align-items: center !important;
            }

            .align-items-xxl-baseline {
                -webkit-box-align: baseline !important;
                -ms-flex-align: baseline !important;
                align-items: baseline !important;
            }

            .align-items-xxl-stretch {
                -webkit-box-align: stretch !important;
                -ms-flex-align: stretch !important;
                align-items: stretch !important;
            }

            .align-content-xxl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important;
            }

            .align-content-xxl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important;
            }

            .align-content-xxl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important;
            }

            .align-content-xxl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important;
            }

            .align-content-xxl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important;
            }

            .align-content-xxl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important;
            }

            .align-self-xxl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important;
            }

            .align-self-xxl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important;
            }

            .align-self-xxl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important;
            }

            .align-self-xxl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important;
            }

            .align-self-xxl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important;
            }

            .align-self-xxl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important;
            }

            .order-xxl-first {
                -webkit-box-ordinal-group: 0 !important;
                -ms-flex-order: -1 !important;
                order: -1 !important;
            }

            .order-xxl-0 {
                -webkit-box-ordinal-group: 1 !important;
                -ms-flex-order: 0 !important;
                order: 0 !important;
            }

            .order-xxl-1 {
                -webkit-box-ordinal-group: 2 !important;
                -ms-flex-order: 1 !important;
                order: 1 !important;
            }

            .order-xxl-2 {
                -webkit-box-ordinal-group: 3 !important;
                -ms-flex-order: 2 !important;
                order: 2 !important;
            }

            .order-xxl-3 {
                -webkit-box-ordinal-group: 4 !important;
                -ms-flex-order: 3 !important;
                order: 3 !important;
            }

            .order-xxl-4 {
                -webkit-box-ordinal-group: 5 !important;
                -ms-flex-order: 4 !important;
                order: 4 !important;
            }

            .order-xxl-5 {
                -webkit-box-ordinal-group: 6 !important;
                -ms-flex-order: 5 !important;
                order: 5 !important;
            }

            .order-xxl-last {
                -webkit-box-ordinal-group: 7 !important;
                -ms-flex-order: 6 !important;
                order: 6 !important;
            }

            .m-xxl-0 {
                margin: 0 !important;
            }

            .m-xxl-1 {
                margin: 0.25rem !important;
            }

            .m-xxl-2 {
                margin: 0.5rem !important;
            }

            .m-xxl-3 {
                margin: 1rem !important;
            }

            .m-xxl-4 {
                margin: 1.6rem !important;
            }

            .m-xxl-5 {
                margin: 3rem !important;
            }

            .m-xxl-6 {
                margin: 3.5rem !important;
            }

            .m-xxl-7 {
                margin: 6rem !important;
            }

            .m-xxl-8 {
                margin: 7rem !important;
            }

            .m-xxl-9 {
                margin: 10rem !important;
            }

            .m-xxl-auto {
                margin: auto !important;
            }

            .mx-xxl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important;
            }

            .mx-xxl-1 {
                margin-right: 0.25rem !important;
                margin-left: 0.25rem !important;
            }

            .mx-xxl-2 {
                margin-right: 0.5rem !important;
                margin-left: 0.5rem !important;
            }

            .mx-xxl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important;
            }

            .mx-xxl-4 {
                margin-right: 1.6rem !important;
                margin-left: 1.6rem !important;
            }

            .mx-xxl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important;
            }

            .mx-xxl-6 {
                margin-right: 3.5rem !important;
                margin-left: 3.5rem !important;
            }

            .mx-xxl-7 {
                margin-right: 6rem !important;
                margin-left: 6rem !important;
            }

            .mx-xxl-8 {
                margin-right: 7rem !important;
                margin-left: 7rem !important;
            }

            .mx-xxl-9 {
                margin-right: 10rem !important;
                margin-left: 10rem !important;
            }

            .mx-xxl-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .my-xxl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .my-xxl-1 {
                margin-top: 0.25rem !important;
                margin-bottom: 0.25rem !important;
            }

            .my-xxl-2 {
                margin-top: 0.5rem !important;
                margin-bottom: 0.5rem !important;
            }

            .my-xxl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important;
            }

            .my-xxl-4 {
                margin-top: 1.6rem !important;
                margin-bottom: 1.6rem !important;
            }

            .my-xxl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important;
            }

            .my-xxl-6 {
                margin-top: 3.5rem !important;
                margin-bottom: 3.5rem !important;
            }

            .my-xxl-7 {
                margin-top: 6rem !important;
                margin-bottom: 6rem !important;
            }

            .my-xxl-8 {
                margin-top: 7rem !important;
                margin-bottom: 7rem !important;
            }

            .my-xxl-9 {
                margin-top: 10rem !important;
                margin-bottom: 10rem !important;
            }

            .my-xxl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .mt-xxl-0 {
                margin-top: 0 !important;
            }

            .mt-xxl-1 {
                margin-top: 0.25rem !important;
            }

            .mt-xxl-2 {
                margin-top: 0.5rem !important;
            }

            .mt-xxl-3 {
                margin-top: 1rem !important;
            }

            .mt-xxl-4 {
                margin-top: 1.6rem !important;
            }

            .mt-xxl-5 {
                margin-top: 3rem !important;
            }

            .mt-xxl-6 {
                margin-top: 3.5rem !important;
            }

            .mt-xxl-7 {
                margin-top: 6rem !important;
            }

            .mt-xxl-8 {
                margin-top: 7rem !important;
            }

            .mt-xxl-9 {
                margin-top: 10rem !important;
            }

            .mt-xxl-auto {
                margin-top: auto !important;
            }

            .me-xxl-0 {
                margin-right: 0 !important;
            }

            .me-xxl-1 {
                margin-right: 0.25rem !important;
            }

            .me-xxl-2 {
                margin-right: 0.5rem !important;
            }

            .me-xxl-3 {
                margin-right: 1rem !important;
            }

            .me-xxl-4 {
                margin-right: 1.6rem !important;
            }

            .me-xxl-5 {
                margin-right: 3rem !important;
            }

            .me-xxl-6 {
                margin-right: 3.5rem !important;
            }

            .me-xxl-7 {
                margin-right: 6rem !important;
            }

            .me-xxl-8 {
                margin-right: 7rem !important;
            }

            .me-xxl-9 {
                margin-right: 10rem !important;
            }

            .me-xxl-auto {
                margin-right: auto !important;
            }

            .mb-xxl-0 {
                margin-bottom: 0 !important;
            }

            .mb-xxl-1 {
                margin-bottom: 0.25rem !important;
            }

            .mb-xxl-2 {
                margin-bottom: 0.5rem !important;
            }

            .mb-xxl-3 {
                margin-bottom: 1rem !important;
            }

            .mb-xxl-4 {
                margin-bottom: 1.6rem !important;
            }

            .mb-xxl-5 {
                margin-bottom: 3rem !important;
            }

            .mb-xxl-6 {
                margin-bottom: 3.5rem !important;
            }

            .mb-xxl-7 {
                margin-bottom: 6rem !important;
            }

            .mb-xxl-8 {
                margin-bottom: 7rem !important;
            }

            .mb-xxl-9 {
                margin-bottom: 10rem !important;
            }

            .mb-xxl-auto {
                margin-bottom: auto !important;
            }

            .ms-xxl-0 {
                margin-left: 0 !important;
            }

            .ms-xxl-1 {
                margin-left: 0.25rem !important;
            }

            .ms-xxl-2 {
                margin-left: 0.5rem !important;
            }

            .ms-xxl-3 {
                margin-left: 1rem !important;
            }

            .ms-xxl-4 {
                margin-left: 1.6rem !important;
            }

            .ms-xxl-5 {
                margin-left: 3rem !important;
            }

            .ms-xxl-6 {
                margin-left: 3.5rem !important;
            }

            .ms-xxl-7 {
                margin-left: 6rem !important;
            }

            .ms-xxl-8 {
                margin-left: 7rem !important;
            }

            .ms-xxl-9 {
                margin-left: 10rem !important;
            }

            .ms-xxl-auto {
                margin-left: auto !important;
            }

            .m-xxl-n1 {
                margin: -0.25rem !important;
            }

            .m-xxl-n2 {
                margin: -0.5rem !important;
            }

            .m-xxl-n3 {
                margin: -1rem !important;
            }

            .m-xxl-n4 {
                margin: -1.6rem !important;
            }

            .m-xxl-n5 {
                margin: -3rem !important;
            }

            .m-xxl-n6 {
                margin: -3.5rem !important;
            }

            .m-xxl-n7 {
                margin: -6rem !important;
            }

            .m-xxl-n8 {
                margin: -7rem !important;
            }

            .m-xxl-n9 {
                margin: -10rem !important;
            }

            .mx-xxl-n1 {
                margin-right: -0.25rem !important;
                margin-left: -0.25rem !important;
            }

            .mx-xxl-n2 {
                margin-right: -0.5rem !important;
                margin-left: -0.5rem !important;
            }

            .mx-xxl-n3 {
                margin-right: -1rem !important;
                margin-left: -1rem !important;
            }

            .mx-xxl-n4 {
                margin-right: -1.6rem !important;
                margin-left: -1.6rem !important;
            }

            .mx-xxl-n5 {
                margin-right: -3rem !important;
                margin-left: -3rem !important;
            }

            .mx-xxl-n6 {
                margin-right: -3.5rem !important;
                margin-left: -3.5rem !important;
            }

            .mx-xxl-n7 {
                margin-right: -6rem !important;
                margin-left: -6rem !important;
            }

            .mx-xxl-n8 {
                margin-right: -7rem !important;
                margin-left: -7rem !important;
            }

            .mx-xxl-n9 {
                margin-right: -10rem !important;
                margin-left: -10rem !important;
            }

            .my-xxl-n1 {
                margin-top: -0.25rem !important;
                margin-bottom: -0.25rem !important;
            }

            .my-xxl-n2 {
                margin-top: -0.5rem !important;
                margin-bottom: -0.5rem !important;
            }

            .my-xxl-n3 {
                margin-top: -1rem !important;
                margin-bottom: -1rem !important;
            }

            .my-xxl-n4 {
                margin-top: -1.6rem !important;
                margin-bottom: -1.6rem !important;
            }

            .my-xxl-n5 {
                margin-top: -3rem !important;
                margin-bottom: -3rem !important;
            }

            .my-xxl-n6 {
                margin-top: -3.5rem !important;
                margin-bottom: -3.5rem !important;
            }

            .my-xxl-n7 {
                margin-top: -6rem !important;
                margin-bottom: -6rem !important;
            }

            .my-xxl-n8 {
                margin-top: -7rem !important;
                margin-bottom: -7rem !important;
            }

            .my-xxl-n9 {
                margin-top: -10rem !important;
                margin-bottom: -10rem !important;
            }

            .mt-xxl-n1 {
                margin-top: -0.25rem !important;
            }

            .mt-xxl-n2 {
                margin-top: -0.5rem !important;
            }

            .mt-xxl-n3 {
                margin-top: -1rem !important;
            }

            .mt-xxl-n4 {
                margin-top: -1.6rem !important;
            }

            .mt-xxl-n5 {
                margin-top: -3rem !important;
            }

            .mt-xxl-n6 {
                margin-top: -3.5rem !important;
            }

            .mt-xxl-n7 {
                margin-top: -6rem !important;
            }

            .mt-xxl-n8 {
                margin-top: -7rem !important;
            }

            .mt-xxl-n9 {
                margin-top: -10rem !important;
            }

            .me-xxl-n1 {
                margin-right: -0.25rem !important;
            }

            .me-xxl-n2 {
                margin-right: -0.5rem !important;
            }

            .me-xxl-n3 {
                margin-right: -1rem !important;
            }

            .me-xxl-n4 {
                margin-right: -1.6rem !important;
            }

            .me-xxl-n5 {
                margin-right: -3rem !important;
            }

            .me-xxl-n6 {
                margin-right: -3.5rem !important;
            }

            .me-xxl-n7 {
                margin-right: -6rem !important;
            }

            .me-xxl-n8 {
                margin-right: -7rem !important;
            }

            .me-xxl-n9 {
                margin-right: -10rem !important;
            }

            .mb-xxl-n1 {
                margin-bottom: -0.25rem !important;
            }

            .mb-xxl-n2 {
                margin-bottom: -0.5rem !important;
            }

            .mb-xxl-n3 {
                margin-bottom: -1rem !important;
            }

            .mb-xxl-n4 {
                margin-bottom: -1.6rem !important;
            }

            .mb-xxl-n5 {
                margin-bottom: -3rem !important;
            }

            .mb-xxl-n6 {
                margin-bottom: -3.5rem !important;
            }

            .mb-xxl-n7 {
                margin-bottom: -6rem !important;
            }

            .mb-xxl-n8 {
                margin-bottom: -7rem !important;
            }

            .mb-xxl-n9 {
                margin-bottom: -10rem !important;
            }

            .ms-xxl-n1 {
                margin-left: -0.25rem !important;
            }

            .ms-xxl-n2 {
                margin-left: -0.5rem !important;
            }

            .ms-xxl-n3 {
                margin-left: -1rem !important;
            }

            .ms-xxl-n4 {
                margin-left: -1.6rem !important;
            }

            .ms-xxl-n5 {
                margin-left: -3rem !important;
            }

            .ms-xxl-n6 {
                margin-left: -3.5rem !important;
            }

            .ms-xxl-n7 {
                margin-left: -6rem !important;
            }

            .ms-xxl-n8 {
                margin-left: -7rem !important;
            }

            .ms-xxl-n9 {
                margin-left: -10rem !important;
            }

            .p-xxl-0 {
                padding: 0 !important;
            }

            .p-xxl-1 {
                padding: 0.25rem !important;
            }

            .p-xxl-2 {
                padding: 0.5rem !important;
            }

            .p-xxl-3 {
                padding: 1rem !important;
            }

            .p-xxl-4 {
                padding: 1.6rem !important;
            }

            .p-xxl-5 {
                padding: 3rem !important;
            }

            .p-xxl-6 {
                padding: 3.5rem !important;
            }

            .p-xxl-7 {
                padding: 6rem !important;
            }

            .p-xxl-8 {
                padding: 7rem !important;
            }

            .p-xxl-9 {
                padding: 10rem !important;
            }

            .px-xxl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important;
            }

            .px-xxl-1 {
                padding-right: 0.25rem !important;
                padding-left: 0.25rem !important;
            }

            .px-xxl-2 {
                padding-right: 0.5rem !important;
                padding-left: 0.5rem !important;
            }

            .px-xxl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            }

            .px-xxl-4 {
                padding-right: 1.6rem !important;
                padding-left: 1.6rem !important;
            }

            .px-xxl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .px-xxl-6 {
                padding-right: 3.5rem !important;
                padding-left: 3.5rem !important;
            }

            .px-xxl-7 {
                padding-right: 6rem !important;
                padding-left: 6rem !important;
            }

            .px-xxl-8 {
                padding-right: 7rem !important;
                padding-left: 7rem !important;
            }

            .px-xxl-9 {
                padding-right: 10rem !important;
                padding-left: 10rem !important;
            }

            .py-xxl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .py-xxl-1 {
                padding-top: 0.25rem !important;
                padding-bottom: 0.25rem !important;
            }

            .py-xxl-2 {
                padding-top: 0.5rem !important;
                padding-bottom: 0.5rem !important;
            }

            .py-xxl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
            }

            .py-xxl-4 {
                padding-top: 1.6rem !important;
                padding-bottom: 1.6rem !important;
            }

            .py-xxl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            .py-xxl-6 {
                padding-top: 3.5rem !important;
                padding-bottom: 3.5rem !important;
            }

            .py-xxl-7 {
                padding-top: 6rem !important;
                padding-bottom: 6rem !important;
            }

            .py-xxl-8 {
                padding-top: 7rem !important;
                padding-bottom: 7rem !important;
            }

            .py-xxl-9 {
                padding-top: 10rem !important;
                padding-bottom: 10rem !important;
            }

            .pt-xxl-0 {
                padding-top: 0 !important;
            }

            .pt-xxl-1 {
                padding-top: 0.25rem !important;
            }

            .pt-xxl-2 {
                padding-top: 0.5rem !important;
            }

            .pt-xxl-3 {
                padding-top: 1rem !important;
            }

            .pt-xxl-4 {
                padding-top: 1.6rem !important;
            }

            .pt-xxl-5 {
                padding-top: 3rem !important;
            }

            .pt-xxl-6 {
                padding-top: 3.5rem !important;
            }

            .pt-xxl-7 {
                padding-top: 6rem !important;
            }

            .pt-xxl-8 {
                padding-top: 7rem !important;
            }

            .pt-xxl-9 {
                padding-top: 10rem !important;
            }

            .pe-xxl-0 {
                padding-right: 0 !important;
            }

            .pe-xxl-1 {
                padding-right: 0.25rem !important;
            }

            .pe-xxl-2 {
                padding-right: 0.5rem !important;
            }

            .pe-xxl-3 {
                padding-right: 1rem !important;
            }

            .pe-xxl-4 {
                padding-right: 1.6rem !important;
            }

            .pe-xxl-5 {
                padding-right: 3rem !important;
            }

            .pe-xxl-6 {
                padding-right: 3.5rem !important;
            }

            .pe-xxl-7 {
                padding-right: 6rem !important;
            }

            .pe-xxl-8 {
                padding-right: 7rem !important;
            }

            .pe-xxl-9 {
                padding-right: 10rem !important;
            }

            .pb-xxl-0 {
                padding-bottom: 0 !important;
            }

            .pb-xxl-1 {
                padding-bottom: 0.25rem !important;
            }

            .pb-xxl-2 {
                padding-bottom: 0.5rem !important;
            }

            .pb-xxl-3 {
                padding-bottom: 1rem !important;
            }

            .pb-xxl-4 {
                padding-bottom: 1.6rem !important;
            }

            .pb-xxl-5 {
                padding-bottom: 3rem !important;
            }

            .pb-xxl-6 {
                padding-bottom: 3.5rem !important;
            }

            .pb-xxl-7 {
                padding-bottom: 6rem !important;
            }

            .pb-xxl-8 {
                padding-bottom: 7rem !important;
            }

            .pb-xxl-9 {
                padding-bottom: 10rem !important;
            }

            .ps-xxl-0 {
                padding-left: 0 !important;
            }

            .ps-xxl-1 {
                padding-left: 0.25rem !important;
            }

            .ps-xxl-2 {
                padding-left: 0.5rem !important;
            }

            .ps-xxl-3 {
                padding-left: 1rem !important;
            }

            .ps-xxl-4 {
                padding-left: 1.6rem !important;
            }

            .ps-xxl-5 {
                padding-left: 3rem !important;
            }

            .ps-xxl-6 {
                padding-left: 3.5rem !important;
            }

            .ps-xxl-7 {
                padding-left: 6rem !important;
            }

            .ps-xxl-8 {
                padding-left: 7rem !important;
            }

            .ps-xxl-9 {
                padding-left: 10rem !important;
            }

            .text-xxl-start {
                text-align: left !important;
            }

            .text-xxl-end {
                text-align: right !important;
            }

            .text-xxl-center {
                text-align: center !important;
            }
        }
        @media (min-width: 1200px) {
            .fs-1 {
                font-size: 2.8125rem !important;
            }

            .fs-2 {
                font-size: 2.34375rem !important;
            }

            .fs-3 {
                font-size: 1.875rem !important;
            }

            .fs-4 {
                font-size: 1.640625rem !important;
            }

            .fs-5 {
                font-size: 1.3125rem !important;
            }
        }
        @media print {
            .d-print-inline {
                display: inline !important;
            }

            .d-print-inline-block {
                display: inline-block !important;
            }

            .d-print-block {
                display: block !important;
            }

            .d-print-grid {
                display: grid !important;
            }

            .d-print-table {
                display: table !important;
            }

            .d-print-table-row {
                display: table-row !important;
            }

            .d-print-table-cell {
                display: table-cell !important;
            }

            .d-print-flex {
                display: -webkit-box !important;
                display: -ms-flexbox !important;
                display: flex !important;
            }

            .d-print-inline-flex {
                display: -webkit-inline-box !important;
                display: -ms-inline-flexbox !important;
                display: inline-flex !important;
            }

            .d-print-none {
                display: none !important;
            }
        }
        .min-w-auto {
            min-width: auto !important;
        }

        .vh-100 {
            height: 100vh !important;
        }

        .h-20px {
            height: 20px !important;
        }

        .h-30px {
            height: 30px !important;
        }

        .h-40px {
            height: 40px !important;
        }

        .h-50px {
            height: 50px !important;
        }

        .h-60px {
            height: 60px !important;
        }

        .h-70px {
            height: 70px !important;
        }

        .h-90px {
            height: 90px !important;
        }

        .h-100px {
            height: 100px !important;
        }

        .h-200px {
            height: 200px !important;
        }

        .h-300px {
            height: 300px !important;
        }

        .h-350px {
            height: 350px !important;
        }

        .h-400px {
            height: 400px !important;
        }

        .h-500px {
            height: 500px !important;
        }

        .h-600px {
            height: 600px !important;
        }

        .h-700px {
            height: 700px !important;
        }

        .w-40px {
            width: 40px !important;
        }

        .w-50px {
            width: 50px !important;
        }

        .w-60px {
            width: 60px !important;
        }

        .w-70px {
            width: 70px !important;
        }

        .w-80px {
            width: 80px !important;
        }

        .w-100px {
            width: 100px !important;
        }

        .w-150px {
            width: 150px !important;
        }

        .w-200px {
            width: 200px !important;
        }

        .w-280px {
            width: 280px !important;
        }

        .w-400px {
            width: 400px !important;
        }

        .bg-opacity-15 {
            --bs-bg-opacity: 0.15;
        }

        .fill-primary {
            fill: #066ac9 !important;
        }

        .fill-white {
            fill: #fff !important;
        }

        .fill-secondary {
            fill: #9a9ea4 !important;
        }

        .fill-success {
            fill: #0cbc87 !important;
        }

        .fill-info {
            fill: #17a2b8 !important;
        }

        .fill-warning {
            fill: #f7c32e !important;
        }

        .fill-danger {
            fill: #d6293e !important;
        }

        .fill-light {
            fill: #f5f7f9 !important;
        }

        .fill-dark {
            fill: #24292d !important;
        }

        .fill-orange {
            fill: #fd7e14 !important;
        }

        .fill-purple {
            fill: #6f42c1 !important;
        }

        .fill-blue {
            fill: #1d3b53 !important;
        }

        .fill-body {
            fill: #fff !important;
        }

        .z-index-0 {
            z-index: 0 !important;
        }

        .z-index-1 {
            z-index: 1 !important;
        }

        .z-index-9 {
            z-index: 9 !important;
        }

        .z-index-99 {
            z-index: 99 !important;
        }

        .z-index-n1 {
            z-index: -1 !important;
        }

        .z-index-n9 {
            z-index: -9 !important;
        }

        .rotate-10 {
            -webkit-transform: rotate(10deg) !important;
            transform: rotate(10deg) !important;
        }

        .rotate-74 {
            -webkit-transform: rotate(74deg) !important;
            transform: rotate(74deg) !important;
        }

        .rotate-130 {
            -webkit-transform: rotate(130deg) !important;
            transform: rotate(130deg) !important;
        }

        .rotate-180 {
            -webkit-transform: rotate(180deg) !important;
            transform: rotate(180deg) !important;
        }

        .rotate-186 {
            -webkit-transform: rotate(186deg) !important;
            transform: rotate(186deg) !important;
        }

        .rotate-193 {
            -webkit-transform: rotate(193deg) !important;
            transform: rotate(193deg) !important;
        }

        .border-dashed {
            border-style: dashed !important;
        }

        .rounded-4 {
            border-radius: 1rem !important;
        }

        .rounded-top-4 {
            border-top-left-radius: 1rem !important;
            border-top-right-radius: 1rem !important;
        }

        .rounded-bottom-4 {
            border-bottom-left-radius: 1rem !important;
            border-bottom-right-radius: 1rem !important;
        }

        .lh-0 {
            line-height: 0 !important;
        }

        .opacity-0 {
            opacity: 0 !important;
        }

        .opacity-1 {
            opacity: 0.1 !important;
        }

        .opacity-2 {
            opacity: 0.2 !important;
        }

        .opacity-3 {
            opacity: 0.3 !important;
        }

        .opacity-4 {
            opacity: 0.4 !important;
        }

        .opacity-5 {
            opacity: 0.5 !important;
        }

        .opacity-6 {
            opacity: 0.6 !important;
        }

        .opacity-7 {
            opacity: 0.7 !important;
        }

        .opacity-8 {
            opacity: 0.8 !important;
        }

        .opacity-9 {
            opacity: 0.9 !important;
        }

        @media (min-width: 576px) {
            .vh-sm-100 {
                height: 100vh !important;
            }

            .h-sm-20px {
                height: 20px !important;
            }

            .h-sm-30px {
                height: 30px !important;
            }

            .h-sm-40px {
                height: 40px !important;
            }

            .h-sm-50px {
                height: 50px !important;
            }

            .h-sm-60px {
                height: 60px !important;
            }

            .h-sm-70px {
                height: 70px !important;
            }

            .h-sm-90px {
                height: 90px !important;
            }

            .h-sm-100px {
                height: 100px !important;
            }

            .h-sm-200px {
                height: 200px !important;
            }

            .h-sm-300px {
                height: 300px !important;
            }

            .h-sm-350px {
                height: 350px !important;
            }

            .h-sm-400px {
                height: 400px !important;
            }

            .h-sm-500px {
                height: 500px !important;
            }

            .h-sm-600px {
                height: 600px !important;
            }

            .h-sm-700px {
                height: 700px !important;
            }

            .w-sm-40px {
                width: 40px !important;
            }

            .w-sm-50px {
                width: 50px !important;
            }

            .w-sm-60px {
                width: 60px !important;
            }

            .w-sm-70px {
                width: 70px !important;
            }

            .w-sm-80px {
                width: 80px !important;
            }

            .w-sm-100px {
                width: 100px !important;
            }

            .w-sm-150px {
                width: 150px !important;
            }

            .w-sm-200px {
                width: 200px !important;
            }

            .w-sm-280px {
                width: 280px !important;
            }

            .w-sm-400px {
                width: 400px !important;
            }
        }
        @media (min-width: 768px) {
            .vh-md-100 {
                height: 100vh !important;
            }

            .h-md-20px {
                height: 20px !important;
            }

            .h-md-30px {
                height: 30px !important;
            }

            .h-md-40px {
                height: 40px !important;
            }

            .h-md-50px {
                height: 50px !important;
            }

            .h-md-60px {
                height: 60px !important;
            }

            .h-md-70px {
                height: 70px !important;
            }

            .h-md-90px {
                height: 90px !important;
            }

            .h-md-100px {
                height: 100px !important;
            }

            .h-md-200px {
                height: 200px !important;
            }

            .h-md-300px {
                height: 300px !important;
            }

            .h-md-350px {
                height: 350px !important;
            }

            .h-md-400px {
                height: 400px !important;
            }

            .h-md-500px {
                height: 500px !important;
            }

            .h-md-600px {
                height: 600px !important;
            }

            .h-md-700px {
                height: 700px !important;
            }

            .w-md-40px {
                width: 40px !important;
            }

            .w-md-50px {
                width: 50px !important;
            }

            .w-md-60px {
                width: 60px !important;
            }

            .w-md-70px {
                width: 70px !important;
            }

            .w-md-80px {
                width: 80px !important;
            }

            .w-md-100px {
                width: 100px !important;
            }

            .w-md-150px {
                width: 150px !important;
            }

            .w-md-200px {
                width: 200px !important;
            }

            .w-md-280px {
                width: 280px !important;
            }

            .w-md-400px {
                width: 400px !important;
            }
        }
        @media (min-width: 992px) {
            .vh-lg-100 {
                height: 100vh !important;
            }

            .h-lg-20px {
                height: 20px !important;
            }

            .h-lg-30px {
                height: 30px !important;
            }

            .h-lg-40px {
                height: 40px !important;
            }

            .h-lg-50px {
                height: 50px !important;
            }

            .h-lg-60px {
                height: 60px !important;
            }

            .h-lg-70px {
                height: 70px !important;
            }

            .h-lg-90px {
                height: 90px !important;
            }

            .h-lg-100px {
                height: 100px !important;
            }

            .h-lg-200px {
                height: 200px !important;
            }

            .h-lg-300px {
                height: 300px !important;
            }

            .h-lg-350px {
                height: 350px !important;
            }

            .h-lg-400px {
                height: 400px !important;
            }

            .h-lg-500px {
                height: 500px !important;
            }

            .h-lg-600px {
                height: 600px !important;
            }

            .h-lg-700px {
                height: 700px !important;
            }

            .w-lg-40px {
                width: 40px !important;
            }

            .w-lg-50px {
                width: 50px !important;
            }

            .w-lg-60px {
                width: 60px !important;
            }

            .w-lg-70px {
                width: 70px !important;
            }

            .w-lg-80px {
                width: 80px !important;
            }

            .w-lg-100px {
                width: 100px !important;
            }

            .w-lg-150px {
                width: 150px !important;
            }

            .w-lg-200px {
                width: 200px !important;
            }

            .w-lg-280px {
                width: 280px !important;
            }

            .w-lg-400px {
                width: 400px !important;
            }
        }
        @media (min-width: 1200px) {
            .vh-xl-100 {
                height: 100vh !important;
            }

            .h-xl-20px {
                height: 20px !important;
            }

            .h-xl-30px {
                height: 30px !important;
            }

            .h-xl-40px {
                height: 40px !important;
            }

            .h-xl-50px {
                height: 50px !important;
            }

            .h-xl-60px {
                height: 60px !important;
            }

            .h-xl-70px {
                height: 70px !important;
            }

            .h-xl-90px {
                height: 90px !important;
            }

            .h-xl-100px {
                height: 100px !important;
            }

            .h-xl-200px {
                height: 200px !important;
            }

            .h-xl-300px {
                height: 300px !important;
            }

            .h-xl-350px {
                height: 350px !important;
            }

            .h-xl-400px {
                height: 400px !important;
            }

            .h-xl-500px {
                height: 500px !important;
            }

            .h-xl-600px {
                height: 600px !important;
            }

            .h-xl-700px {
                height: 700px !important;
            }

            .w-xl-40px {
                width: 40px !important;
            }

            .w-xl-50px {
                width: 50px !important;
            }

            .w-xl-60px {
                width: 60px !important;
            }

            .w-xl-70px {
                width: 70px !important;
            }

            .w-xl-80px {
                width: 80px !important;
            }

            .w-xl-100px {
                width: 100px !important;
            }

            .w-xl-150px {
                width: 150px !important;
            }

            .w-xl-200px {
                width: 200px !important;
            }

            .w-xl-280px {
                width: 280px !important;
            }

            .w-xl-400px {
                width: 400px !important;
            }
        }
        @media (min-width: 1400px) {
            .vh-xxl-100 {
                height: 100vh !important;
            }

            .h-xxl-20px {
                height: 20px !important;
            }

            .h-xxl-30px {
                height: 30px !important;
            }

            .h-xxl-40px {
                height: 40px !important;
            }

            .h-xxl-50px {
                height: 50px !important;
            }

            .h-xxl-60px {
                height: 60px !important;
            }

            .h-xxl-70px {
                height: 70px !important;
            }

            .h-xxl-90px {
                height: 90px !important;
            }

            .h-xxl-100px {
                height: 100px !important;
            }

            .h-xxl-200px {
                height: 200px !important;
            }

            .h-xxl-300px {
                height: 300px !important;
            }

            .h-xxl-350px {
                height: 350px !important;
            }

            .h-xxl-400px {
                height: 400px !important;
            }

            .h-xxl-500px {
                height: 500px !important;
            }

            .h-xxl-600px {
                height: 600px !important;
            }

            .h-xxl-700px {
                height: 700px !important;
            }

            .w-xxl-40px {
                width: 40px !important;
            }

            .w-xxl-50px {
                width: 50px !important;
            }

            .w-xxl-60px {
                width: 60px !important;
            }

            .w-xxl-70px {
                width: 70px !important;
            }

            .w-xxl-80px {
                width: 80px !important;
            }

            .w-xxl-100px {
                width: 100px !important;
            }

            .w-xxl-150px {
                width: 150px !important;
            }

            .w-xxl-200px {
                width: 200px !important;
            }

            .w-xxl-280px {
                width: 280px !important;
            }

            .w-xxl-400px {
                width: 400px !important;
            }
        }
        .accordion .accordion-button {
            text-align: left;
        }

        .accordion.accordion-icon .accordion-header {
            position: relative;
        }
        .accordion.accordion-icon .accordion-header .accordion-button {
            background: transparent;
            font-size: inherit;
            border: none;
        }
        .accordion.accordion-icon .accordion-header .accordion-button:after {
            content: "";
            background: #24292d !important;
            width: 10px;
            height: 2px;
            display: block;
            position: absolute;
            top: 47%;
            right: 20px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
            z-index: 9;
        }
        .accordion.accordion-icon .accordion-header .accordion-button:before {
            content: "";
            background: #24292d !important;
            width: 10px;
            height: 2px;
            display: block;
            position: absolute;
            top: 47%;
            right: 20px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
            z-index: 9;
        }
        .accordion.accordion-icon .accordion-header .accordion-button[aria-expanded=false]:after {
            -webkit-transform: rotateZ(90deg);
            transform: rotateZ(90deg);
        }
        .accordion.accordion-icon .accordion-header .accordion-button[aria-expanded=true]:before {
            -webkit-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
        }
        .accordion.accordion-icon .accordion-collapse {
            border: none;
        }
        .accordion.accordion-icon .accordion-body {
            padding: 0.2rem 0.5rem 0.5rem 1rem;
        }

        .accordion.accordion-circle .accordion-item {
            border-radius: 0.325rem !important;
            border: 1px solid rgba(154, 158, 164, 0.2);
        }
        .accordion.accordion-circle .accordion-item:not(:first-of-type) {
            border-top: 1px solid rgba(154, 158, 164, 0.2);
        }
        .accordion.accordion-circle .accordion-header {
            position: relative;
        }
        .accordion.accordion-circle .accordion-header .accordion-button {
            background: transparent;
            color: #24292d;
            border: none;
            font-size: inherit;
            padding-left: 2.7rem;
            background-color: transparent !important;
        }
        .accordion.accordion-circle .accordion-header .accordion-button:after {
            content: "";
            background: #066ac9;
            width: 12px;
            height: 12px;
            border-radius: 100%;
            display: block;
            position: absolute;
            top: 47%;
            left: 17px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            z-index: 9;
        }
        .accordion.accordion-circle .accordion-header .accordion-button:before {
            content: "";
            background: #fff;
            -webkit-box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.4);
            box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.4);
            width: 18px;
            height: 18px;
            border-radius: 100%;
            display: block;
            position: absolute;
            top: 47%;
            left: 14px;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            z-index: 9;
        }
        .accordion.accordion-circle .accordion-header .accordion-button[aria-expanded=true]:after {
            visibility: visible;
        }
        .accordion.accordion-circle .accordion-header .accordion-button[aria-expanded=false]:after {
            visibility: hidden !important;
        }
        .accordion.accordion-circle .accordion-header .accordion-button:not(.collapsed) {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }
        .accordion.accordion-circle .accordion-collapse {
            border: none;
        }
        .accordion.accordion-circle .accordion-body {
            padding: 0.5rem 2rem 1.5rem 2rem;
        }

        @media (max-width: 575.98px) {
            .accordion-circle .accordion-body {
                padding: 0.6rem 1.5rem 0.5rem 1.5rem !important;
            }

            .accordion-circle .accordion-header .accordion-button {
                padding-left: 2.5rem !important;
            }
        }
        .accordion.accordion-bg-light .accordion-item {
            border: none;
            background-color: transparent;
        }
        .accordion.accordion-bg-light .accordion-button {
            background-color: rgba(116, 117, 121, 0.1) !important;
            color: #24292d !important;
        }
        .accordion.accordion-bg-light .accordion-button:after {
            background: #24292d !important;
        }
        .accordion.accordion-bg-light .accordion-button:before {
            background: #24292d !important;
        }
        .accordion.accordion-bg-light .accordion-button:not(.collapsed) {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .accordion.accordion-shadow .accordion-item {
            border: none;
        }
        .accordion.accordion-shadow .accordion-button {
            background-color: #fff !important;
            color: #24292d !important;
            -webkit-box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15);
            box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15);
        }
        .accordion.accordion-shadow .accordion-button:after {
            background: #24292d !important;
        }
        .accordion.accordion-shadow .accordion-button:before {
            background: #24292d !important;
        }
        .accordion.accordion-shadow .accordion-button:not(.collapsed) {
            -webkit-box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15);
            box-shadow: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15);
        }

        @media (max-width: 575.98px) {
            .accordion-icon .accordion-body {
                padding: 0.6rem 0.5rem 0.5rem 0.5rem !important;
            }

            .accordion-header .accordion-button {
                padding-left: 1.3rem !important;
            }
        }
        .accordion-flush .accordion-item {
            background-color: transparent;
        }

        .accordion-flush .accordion-button {
            padding: 1rem 0rem;
            background-color: transparent;
        }

        .accordion-flush .accordion-button:after {
            background-size: 0.825rem;
            width: 0.825rem;
            height: 0.825rem;
        }

        .accordion-flush .accordion-button:not(.collapsed) {
            color: #24292d;
            background-color: transparent;
        }

        .accordion.accordion-flush .accordion-header .accordion-button:not(.collapsed) {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }
        .accordion.accordion-flush.accordion-body {
            padding: 0.5rem 1.5rem;
        }

        .accordion-flush .accordion-button[aria-expanded=true]::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        @media (min-width: 768px) {
            .accordion.accordion-flush .accordion-body {
                padding: 0.825rem 2rem;
            }
        }
        .accordion.accordion-flush-light .accordion-item {
            background-color: transparent;
            border-bottom: 1px solid rgba(154, 158, 164, 0.1);
        }

        .accordion.accordion-flush-light .accordion-header .accordion-button {
            background: transparent;
            padding: 15px;
            border: none;
            color: #24292d;
        }

        .accordion.accordion-flush-light .accordion-button[aria-expanded=true] {
            background-color: rgba(116, 117, 121, 0.1);
            color: #24292d;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 0.325rem;
        }

        .breadcrumb-item a {
            color: #747579;
        }
        .breadcrumb-item a:hover {
            color: #066ac9;
        }

        .breadcrumb.breadcrumb-dark .breadcrumb-item a {
            color: #dde0e3;
        }
        .breadcrumb.breadcrumb-dark .breadcrumb-item a:hover {
            color: #066ac9;
        }
        .breadcrumb.breadcrumb-dark .breadcrumb-item.active {
            color: #cfd3d7;
        }

        .breadcrumb.breadcrumb-dots .breadcrumb-item + .breadcrumb-item::before {
            content: "•";
            font-size: 22px;
            line-height: 0;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .btn {
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
            outline: 0;
            white-space: nowrap;
            margin-bottom: 6px;
        }

        .input-group .btn {
            margin-bottom: 0;
        }

        .btn-xs {
            padding: 0.4rem 0.6rem;
            font-size: 0.6rem;
            line-height: 1.2;
            border-radius: 0.325rem;
        }

        .btn-light {
            background: #dddee0;
            border-color: #dddee0;
        }
        .btn-light.active, .btn-light:active, .btn-light:focus, .btn-light:hover {
            background: #c4c6c7;
            border-color: #c4c6c7;
        }

        .btn-white {
            background: #fff;
            color: #24292d;
        }
        .btn-white.active, .btn-white:active, .btn-white:focus, .btn-white:hover {
            background: #eff1f2;
            color: #24292d;
        }

        .btn-outline-white {
            background: transparent;
            border-color: #fff;
            color: #fff;
        }
        .btn-outline-white.active, .btn-outline-white:active, .btn-outline-white:focus, .btn-outline-white:hover {
            color: #24292d;
            background: #fff;
        }

        .btn-outline-light {
            background: transparent;
            border-color: #cfd3d7;
            color: #747579;
        }
        .btn-outline-light:active, .btn-outline-light:hover, .btn-outline-light:focus {
            background: #cfd3d7;
            border-color: #cfd3d7;
            color: #24292d;
        }

        .btn-check:checked + .btn-outline-light {
            background: #cfd3d7;
            border-color: #cfd3d7;
            color: #24292d;
        }

        .btn-round {
            height: 40px;
            width: 40px;
            line-height: 40px;
            border-radius: 50%;
            padding: 0;
            text-align: center;
        }
        .btn-round i {
            margin: 0;
        }
        .btn-round .fa-play {
            padding-left: 3px;
        }
        .btn-round.btn-lg, .btn-group-lg > .btn-round.btn {
            height: 55px;
            width: 55px;
            line-height: 55px;
        }
        .btn-round.btn-sm, .btn-group-sm > .btn-round.btn {
            height: 32px;
            width: 32px;
            line-height: 30px;
        }
        .btn-round.btn-sm i, .btn-group-sm > .btn-round.btn i {
            font-size: 0.6rem;
        }

        /*rtl:raw:
.btn-round .fa-play{
  padding-left: 3px;
  padding-right: 0;
}
*/
        .btn-primary-soft {
            color: #066ac9;
            background-color: rgba(6, 106, 201, 0.1);
        }
        .btn-primary-soft:hover {
            color: #fff;
            background-color: #066ac9;
        }

        .btn-white-soft {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .btn-white-soft:hover {
            color: #000;
            background-color: #fff;
        }

        .btn-secondary-soft {
            color: #9a9ea4;
            background-color: rgba(154, 158, 164, 0.1);
        }
        .btn-secondary-soft:hover {
            color: #fff;
            background-color: #9a9ea4;
        }

        .btn-success-soft {
            color: #0cbc87;
            background-color: rgba(12, 188, 135, 0.1);
        }
        .btn-success-soft:hover {
            color: #fff;
            background-color: #0cbc87;
        }

        .btn-info-soft {
            color: #17a2b8;
            background-color: rgba(23, 162, 184, 0.1);
        }
        .btn-info-soft:hover {
            color: #fff;
            background-color: #17a2b8;
        }

        .btn-warning-soft {
            color: #f7c32e;
            background-color: rgba(247, 195, 46, 0.1);
        }
        .btn-warning-soft:hover {
            color: #000;
            background-color: #f7c32e;
        }

        .btn-danger-soft {
            color: #d6293e;
            background-color: rgba(214, 41, 62, 0.1);
        }
        .btn-danger-soft:hover {
            color: #fff;
            background-color: #d6293e;
        }

        .btn-light-soft {
            color: #f5f7f9;
            background-color: rgba(245, 247, 249, 0.1);
        }
        .btn-light-soft:hover {
            color: #000;
            background-color: #f5f7f9;
        }

        .btn-dark-soft {
            color: #24292d;
            background-color: rgba(36, 41, 45, 0.1);
        }
        .btn-dark-soft:hover {
            color: #fff;
            background-color: #24292d;
        }

        .btn-orange-soft {
            color: #fd7e14;
            background-color: rgba(253, 126, 20, 0.1);
        }
        .btn-orange-soft:hover {
            color: #fff;
            background-color: #fd7e14;
        }

        .btn-purple-soft {
            color: #6f42c1;
            background-color: rgba(111, 66, 193, 0.1);
        }
        .btn-purple-soft:hover {
            color: #fff;
            background-color: #6f42c1;
        }

        .btn-blue-soft {
            color: #1d3b53;
            background-color: rgba(29, 59, 83, 0.1);
        }
        .btn-blue-soft:hover {
            color: #fff;
            background-color: #1d3b53;
        }

        .btn-primary-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(6, 106, 201, 0.4);
            box-shadow: 0 0 0 8px rgba(6, 106, 201, 0.4);
            background-color: #066ac9;
        }
        .btn-primary-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-primary-shadow, .btn-primary-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(6, 106, 201, 0.4);
            box-shadow: 0 0 0 8px rgba(6, 106, 201, 0.4);
        }

        .btn-white-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.4);
            background-color: #fff;
        }
        .btn-white-shadow:hover {
            color: #000;
        }
        .btn-check:focus + .btn-white-shadow, .btn-white-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.4);
            box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.4);
        }

        .btn-secondary-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(154, 158, 164, 0.4);
            box-shadow: 0 0 0 8px rgba(154, 158, 164, 0.4);
            background-color: #9a9ea4;
        }
        .btn-secondary-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-secondary-shadow, .btn-secondary-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(154, 158, 164, 0.4);
            box-shadow: 0 0 0 8px rgba(154, 158, 164, 0.4);
        }

        .btn-success-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(12, 188, 135, 0.4);
            box-shadow: 0 0 0 8px rgba(12, 188, 135, 0.4);
            background-color: #0cbc87;
        }
        .btn-success-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-success-shadow, .btn-success-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(12, 188, 135, 0.4);
            box-shadow: 0 0 0 8px rgba(12, 188, 135, 0.4);
        }

        .btn-info-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(23, 162, 184, 0.4);
            box-shadow: 0 0 0 8px rgba(23, 162, 184, 0.4);
            background-color: #17a2b8;
        }
        .btn-info-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-info-shadow, .btn-info-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(23, 162, 184, 0.4);
            box-shadow: 0 0 0 8px rgba(23, 162, 184, 0.4);
        }

        .btn-warning-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(247, 195, 46, 0.4);
            box-shadow: 0 0 0 8px rgba(247, 195, 46, 0.4);
            background-color: #f7c32e;
        }
        .btn-warning-shadow:hover {
            color: #000;
        }
        .btn-check:focus + .btn-warning-shadow, .btn-warning-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(247, 195, 46, 0.4);
            box-shadow: 0 0 0 8px rgba(247, 195, 46, 0.4);
        }

        .btn-danger-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(214, 41, 62, 0.4);
            box-shadow: 0 0 0 8px rgba(214, 41, 62, 0.4);
            background-color: #d6293e;
        }
        .btn-danger-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-danger-shadow, .btn-danger-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(214, 41, 62, 0.4);
            box-shadow: 0 0 0 8px rgba(214, 41, 62, 0.4);
        }

        .btn-light-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(245, 247, 249, 0.4);
            box-shadow: 0 0 0 8px rgba(245, 247, 249, 0.4);
            background-color: #f5f7f9;
        }
        .btn-light-shadow:hover {
            color: #000;
        }
        .btn-check:focus + .btn-light-shadow, .btn-light-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(245, 247, 249, 0.4);
            box-shadow: 0 0 0 8px rgba(245, 247, 249, 0.4);
        }

        .btn-dark-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(36, 41, 45, 0.4);
            box-shadow: 0 0 0 8px rgba(36, 41, 45, 0.4);
            background-color: #24292d;
        }
        .btn-dark-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-dark-shadow, .btn-dark-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(36, 41, 45, 0.4);
            box-shadow: 0 0 0 8px rgba(36, 41, 45, 0.4);
        }

        .btn-orange-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(253, 126, 20, 0.4);
            box-shadow: 0 0 0 8px rgba(253, 126, 20, 0.4);
            background-color: #fd7e14;
        }
        .btn-orange-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-orange-shadow, .btn-orange-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(253, 126, 20, 0.4);
            box-shadow: 0 0 0 8px rgba(253, 126, 20, 0.4);
        }

        .btn-purple-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(111, 66, 193, 0.4);
            box-shadow: 0 0 0 8px rgba(111, 66, 193, 0.4);
            background-color: #6f42c1;
        }
        .btn-purple-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-purple-shadow, .btn-purple-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(111, 66, 193, 0.4);
            box-shadow: 0 0 0 8px rgba(111, 66, 193, 0.4);
        }

        .btn-blue-shadow {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #fff;
            -webkit-box-shadow: 0 0 0 8px rgba(29, 59, 83, 0.4);
            box-shadow: 0 0 0 8px rgba(29, 59, 83, 0.4);
            background-color: #1d3b53;
        }
        .btn-blue-shadow:hover {
            color: #fff;
        }
        .btn-check:focus + .btn-blue-shadow, .btn-blue-shadow:focus {
            -webkit-box-shadow: 0 0 0 8px rgba(29, 59, 83, 0.4);
            box-shadow: 0 0 0 8px rgba(29, 59, 83, 0.4);
        }

        .btn-primary-soft-check:hover {
            background-color: rgba(6, 106, 201, 0.2);
            border-color: rgba(6, 106, 201, 0);
        }

        .btn-check:active + .btn-primary-soft-check, .btn-check:checked + .btn-primary-soft-check, .btn-primary-soft-check.active, .btn-primary-soft-check:active, .show > .btn-primary-soft-check.dropdown-toggle {
            background-color: rgba(6, 106, 201, 0.2);
            color: #066ac9;
            border-color: rgba(6, 106, 201, 0);
        }

        .btn-check:focus + .btn, .btn-round-shadow:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btn-more i {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .btn-more[aria-expanded=true] i {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform-origin: center;
            transform-origin: center;
        }

        .btn-more .see-more {
            display: block;
        }

        .btn-more .see-less {
            display: none;
        }

        .btn-more[aria-expanded=true] .see-more {
            display: none;
        }

        .btn-more[aria-expanded=true] .see-less {
            display: block;
        }

        .btn-transition {
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .btn-transition:focus, .btn-transition:hover {
            -webkit-transform: translateY(-0.1875rem);
            transform: translateY(-0.1875rem);
        }

        .card, .overflow-hidden {
            will-change: transform;
        }

        .card-header-title {
            margin-bottom: 0;
        }

        .card .card-img-overlay {
            z-index: 2;
        }

        .card-hover-border:hover {
            border: 1px solid #dde0e3;
        }

        .card .card-element-hover {
            visibility: hidden;
            margin-top: 30px;
            opacity: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            z-index: 9;
        }
        .card:hover .card-element-hover {
            visibility: visible;
            margin-top: 0px;
            opacity: 1;
        }

        .action-trigger-hover .item-show {
            display: block;
            visibility: visible;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .action-trigger-hover:hover .item-show {
            display: none;
            visibility: hidden;
        }

        .action-trigger-hover .item-show-hover {
            display: none;
            visibility: hidden;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .action-trigger-hover:hover .item-show-hover {
            display: block;
            visibility: visible;
        }

        .card-metro {
            overflow: hidden;
        }
        .card-metro .card-img-overlay {
            z-index: 2;
        }
        .card-metro .card-text, .card-metro img {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .card-metro:before {
            content: "";
            position: absolute;
            height: 50%;
            width: 100%;
            bottom: 0;
            background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), to(rgba(0, 0, 0, 0.8)));
            background-image: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.8));
            z-index: 1;
        }
        .card-metro:hover .card-text {
            margin-bottom: 10px;
        }
        .card-metro:hover .card-image img {
            -webkit-transform: scale(1.08);
            transform: scale(1.08);
        }

        .card-overlay-hover:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-color: #24292d;
            display: block;
        }

        .card:hover .card-overlay-hover:before {
            opacity: 0.5;
        }

        .card-border-hover {
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .card-border-hover h2 i, .card-border-hover .h2 i {
            color: #9a9ea4;
        }
        .card-border-hover:hover {
            border-color: #066ac9;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .card-border-hover:hover h2 i, .card-border-hover:hover .h2 i {
            color: #066ac9;
        }

        .dropdown-item.active, .dropdown-item:active,
        .dropdown-item:hover, .dropdown-item:focus {
            border-radius: 0.325rem;
        }

        .dropdown-menu {
            padding-left: 10px;
            padding-right: 10px;
            z-index: 1100;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
        }

        .dropdown-menu-size-sm {
            min-width: 13rem;
        }

        .dropdown-menu-size-md {
            min-width: 22rem;
        }

        .dropdown-menu-size-lg {
            min-width: 30rem;
        }

        @media (max-width: 575.98px) {
            .dropdown-menu-size-md {
                min-width: 16rem;
                margin-right: -25px !important;
            }

            .dropdown-menu-size-sm {
                min-width: 13rem;
            }
        }
        .dropdown .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }

        .dropup .dropdown-toggle:after {
            content: "\f106";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }

        .dropstart .dropdown-toggle:before {
            content: "\f104";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }

        .dropend .dropdown-toggle:after {
            content: "\f105";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }

        @media (max-width: 991.98px) {
            .dropdown-width-lg {
                width: 100%;
                padding: 0;
            }
        }
        @media (min-width: 1200px) {
            .dropdown-width-lg {
                width: 40rem;
                padding: 0;
            }
        }
        @media (min-width: 1400px) {
            .dropdown-width-lg {
                width: 50rem;
                padding: 0;
            }
        }
        .dropdown-fullwidth .dropdown-menu {
            margin: 0 auto;
            left: 0;
            right: 0;
            padding: 1rem 0;
        }

        @media (min-width: 1200px) {
            .dropdown-fullwidth {
                position: static;
            }
        }
        @media (min-width: 576px) {
            .dropdown-fullwidth .dropdown-menu {
                max-width: 96%;
            }
        }
        @media (min-width: 768px) {
            .dropdown-fullwidth .dropdown-menu {
                max-width: 94%;
            }
        }
        @media (min-width: 992px) {
            .dropdown-fullwidth .dropdown-menu {
                max-width: 94%;
            }
        }
        @media (min-width: 1200px) {
            .dropdown-fullwidth .dropdown-menu {
                max-width: 1140px;
            }
        }
        @media (min-width: 1400px) {
            .dropdown-fullwidth .dropdown-menu {
                max-width: 1300px;
            }
        }
        .dropdown-menu-start {
            left: 0;
        }

        .dropdown-menu-end {
            right: 0;
        }

        @media (min-width: 576px) {
            .dropdown-menu-sm-start {
                left: 0;
            }

            .dropdown-menu-sm-end {
                right: 0;
            }
        }
        @media (min-width: 768px) {
            .dropdown-menu-md-start {
                left: 0;
            }

            .dropdown-menu-md-end {
                right: 0;
            }
        }
        @media (min-width: 992px) {
            .dropdown-menu-lg-start {
                left: 0;
            }

            .dropdown-menu-lg-end {
                right: 0;
            }
        }
        @media (min-width: 1200px) {
            .dropdown-menu-xl-start {
                left: 0;
            }

            .dropdown-menu-xl-end {
                right: 0;
            }
        }
        @media (min-width: 1400px) {
            .dropdown-menu-xxl-start {
                left: 0;
            }

            .dropdown-menu-xxl-end {
                right: 0;
            }
        }
        @media (max-width: 1199.98px) {
            .dropdown-fullwidth .dropdown-menu .container {
                max-width: 100%;
            }
        }
        .dropdown-menu.dropdown-animation.show {
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: dropdownslideIn;
            animation-name: dropdownslideIn;
            position: absolute !important;
            top: 100% !important;
        }

        @keyframes dropdownslideIn {
            0% {
                -webkit-transform: translateY(1rem);
                transform: translateY(1rem);
                opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0rem);
                transform: translateY(0rem);
                opacity: 1;
            }
            0% {
                -webkit-transform: translateY(1rem);
                transform: translateY(1rem);
                opacity: 0;
            }
        }
        @-webkit-keyframes dropdownslideIn {
            0% {
                -webkit-transform: transform;
                -webkit-opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                -webkit-opacity: 1;
            }
            0% {
                -webkit-transform: translateY(1rem);
                -webkit-opacity: 0;
            }
        }
        .list-group .list-group-item i, .list-group .list-group-item span {
            margin-right: 5px;
        }

        .list-group-borderless .list-group-item {
            border: none !important;
            padding: 0.425rem 0;
        }
        .list-group-borderless a.list-group-item:hover {
            background-color: transparent;
            color: #066ac9;
        }

        .list-group-dark .list-group-item {
            color: #fff;
            margin-bottom: 10px;
            padding-right: 1rem !important;
            padding-left: 1rem !important;
            border-radius: 0.325rem;
        }

        .list-group-dark .list-group-item:not(.bg-danger-soft-hover):hover, .list-group-dark .list-group-item:not(.bg-danger-soft-hover).active {
            color: #24292d !important;
            background-color: #fff !important;
        }

        .nav-pills .nav-link {
            cursor: pointer;
            margin-bottom: 15px;
            padding: 0.5rem 1rem;
        }

        .nav.flex-column:not(.nav-pills) .nav-link {
            padding-left: 0;
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
        }

        .nav.nav-divider a:not(.dropdown-item) {
            color: inherit;
        }
        .nav.nav-divider .nav-item + .nav-item:before {
            content: "•";
            color: inherit;
            padding-left: 0.65rem;
            padding-right: 0.75rem;
            opacity: 0.8;
        }
        .nav.nav-divider .nav-item {
            display: inline-block;
            vertical-align: middle;
        }
        .nav.nav-divider .nav-link {
            padding: 0;
            color: inherit;
        }

        .nav-pill-soft .nav-link {
            background-color: rgba(6, 106, 201, 0.1);
            color: #066ac9;
            border: none;
        }

        .nav-pill-soft .nav-link.active, .nav-pill-soft .show > .nav-link {
            color: #fff !important;
            background-color: #066ac9;
        }

        .nav-pill-dark-soft .nav-link {
            background-color: rgba(36, 41, 45, 0.1);
            color: #24292d;
            border: none;
        }

        .nav-pill-dark-soft .nav-link.active, .nav-pill-dark-soft .show > .nav-link {
            color: #fff;
            background-color: #24292d;
        }

        .nav-pills-bg-soft {
            background-color: rgba(6, 106, 201, 0.1);
            padding: 0.625rem 0;
            border-radius: 0.625rem;
        }

        .nav-pills-bg-soft .nav-link {
            color: #066ac9;
        }

        .nav-pills.nav-tabs-line {
            padding: 0.625rem 0;
        }
        .nav-pills.nav-tabs-line .nav-link {
            border: transparent;
            color: #066ac9;
        }
        .nav-pills.nav-tabs-line .nav-link.active {
            color: #066ac9;
            background-color: rgba(6, 106, 201, 0.1);
        }
        .nav-pills.nav-tabs-line .nav-item {
            margin-bottom: -2px;
        }

        .nav-tabs-bg-dark {
            border-radius: 0.5rem;
            background-color: #24292d;
            padding: 1.5rem;
        }

        .nav-tabs-bg-dark .nav-link {
            color: #fff;
            border-radius: 0.5rem;
            padding: 0.825rem;
            margin-bottom: 5px;
        }

        .nav-tabs-bg-dark .nav-link.active, .nav-tabs-bg-dark .show > .nav-link {
            color: #24292d !important;
            background-color: #fff;
            border-radius: 0.325rem;
        }

        .navbar-expand-sm .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-sm .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 5 Free";
            right: 1rem;
        }
        .navbar-expand-sm .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 5 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 576px) {
            .navbar-expand-sm .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-sm .navbar-brand .navbar-brand-item {
                height: 36px;
                display: block;
                width: auto;
            }
            .navbar-expand-sm .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-sm .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-sm .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-sm .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                margin-left: 0.5rem;
            }
            .navbar-expand-sm .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-sm .navbar-nav .nav-link {
                line-height: 40px;
                font-weight: 500;
            }
            .navbar-expand-sm .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: #fff;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                border-radius: inherit;
            }
            .navbar-expand-sm .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 575.98px) {
            .navbar-expand-sm .navbar-brand .navbar-brand-item {
                height: 24px;
            }
            .navbar-expand-sm .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-sm .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-sm .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: #fff;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-sm .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 30px;
            }
            .navbar-expand-sm .navbar-nav .nav-item > .dropdown-menu {
                background: rgba(64, 68, 72, 0.04);
            }
            .navbar-expand-sm .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06);
            }
            .navbar-expand-sm .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-sm .navbar-toggler {
                border-color: transparent !important;
            }
            .navbar-expand-sm .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-sm .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-sm .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-sm .dropdown-clickable .nav-item {
                position: static;
            }
            .navbar-expand-sm .dropdown-clickable .nav-item > .dropdown-menu[data-bs-popper] {
                position: absolute !important;
                top: 100% !important;
                left: 0;
                right: 0;
                width: 100%;
                background: #fff !important;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                border-radius: 0;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                padding: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-sm .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 12px 30px;
            }
            .navbar-expand-sm .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06) !important;
                margin-left: 0.5rem;
            }
            .navbar-expand-sm .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-sm .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu .dropdown-item {
                border-bottom: 0;
                padding: 8px 40px;
            }
            .navbar-expand-sm .dropdown-clickable .nav-item .dropdown-menu.show[data-bs-popper] {
                top: 100%;
                padding-bottom: 15px;
            }
        }
        .navbar-expand-md .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-md .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 5 Free";
            right: 1rem;
        }
        .navbar-expand-md .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 5 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 768px) {
            .navbar-expand-md .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-md .navbar-brand .navbar-brand-item {
                height: 36px;
                display: block;
                width: auto;
            }
            .navbar-expand-md .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-md .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-md .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-md .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                margin-left: 0.5rem;
            }
            .navbar-expand-md .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-md .navbar-nav .nav-link {
                line-height: 40px;
                font-weight: 500;
            }
            .navbar-expand-md .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: #fff;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                border-radius: inherit;
            }
            .navbar-expand-md .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 767.98px) {
            .navbar-expand-md .navbar-brand .navbar-brand-item {
                height: 24px;
            }
            .navbar-expand-md .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-md .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-md .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: #fff;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-md .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 30px;
            }
            .navbar-expand-md .navbar-nav .nav-item > .dropdown-menu {
                background: rgba(64, 68, 72, 0.04);
            }
            .navbar-expand-md .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06);
            }
            .navbar-expand-md .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-md .navbar-toggler {
                border-color: transparent !important;
            }
            .navbar-expand-md .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-md .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-md .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-md .dropdown-clickable .nav-item {
                position: static;
            }
            .navbar-expand-md .dropdown-clickable .nav-item > .dropdown-menu[data-bs-popper] {
                position: absolute !important;
                top: 100% !important;
                left: 0;
                right: 0;
                width: 100%;
                background: #fff !important;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                border-radius: 0;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                padding: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-md .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 12px 30px;
            }
            .navbar-expand-md .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06) !important;
                margin-left: 0.5rem;
            }
            .navbar-expand-md .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-md .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu .dropdown-item {
                border-bottom: 0;
                padding: 8px 40px;
            }
            .navbar-expand-md .dropdown-clickable .nav-item .dropdown-menu.show[data-bs-popper] {
                top: 100%;
                padding-bottom: 15px;
            }
        }
        .navbar-expand-lg .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-lg .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 5 Free";
            right: 1rem;
        }
        .navbar-expand-lg .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 5 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-lg .navbar-brand .navbar-brand-item {
                height: 36px;
                display: block;
                width: auto;
            }
            .navbar-expand-lg .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-lg .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-lg .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-lg .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                margin-left: 0.5rem;
            }
            .navbar-expand-lg .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-lg .navbar-nav .nav-link {
                line-height: 40px;
                font-weight: 500;
            }
            .navbar-expand-lg .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: #fff;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                border-radius: inherit;
            }
            .navbar-expand-lg .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 991.98px) {
            .navbar-expand-lg .navbar-brand .navbar-brand-item {
                height: 24px;
            }
            .navbar-expand-lg .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-lg .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-lg .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: #fff;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-lg .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 30px;
            }
            .navbar-expand-lg .navbar-nav .nav-item > .dropdown-menu {
                background: rgba(64, 68, 72, 0.04);
            }
            .navbar-expand-lg .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06);
            }
            .navbar-expand-lg .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-lg .navbar-toggler {
                border-color: transparent !important;
            }
            .navbar-expand-lg .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-lg .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-lg .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-lg .dropdown-clickable .nav-item {
                position: static;
            }
            .navbar-expand-lg .dropdown-clickable .nav-item > .dropdown-menu[data-bs-popper] {
                position: absolute !important;
                top: 100% !important;
                left: 0;
                right: 0;
                width: 100%;
                background: #fff !important;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                border-radius: 0;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                padding: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-lg .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 12px 30px;
            }
            .navbar-expand-lg .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06) !important;
                margin-left: 0.5rem;
            }
            .navbar-expand-lg .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-lg .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu .dropdown-item {
                border-bottom: 0;
                padding: 8px 40px;
            }
            .navbar-expand-lg .dropdown-clickable .nav-item .dropdown-menu.show[data-bs-popper] {
                top: 100%;
                padding-bottom: 15px;
            }
        }
        .navbar-expand-xl .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-xl .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 5 Free";
            right: 1rem;
        }
        .navbar-expand-xl .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 5 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 1200px) {
            .navbar-expand-xl .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-xl .navbar-brand .navbar-brand-item {
                height: 36px;
                display: block;
                width: auto;
            }
            .navbar-expand-xl .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-xl .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-xl .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-xl .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                margin-left: 0.5rem;
            }
            .navbar-expand-xl .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-xl .navbar-nav .nav-link {
                line-height: 40px;
                font-weight: 500;
            }
            .navbar-expand-xl .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: #fff;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                border-radius: inherit;
            }
            .navbar-expand-xl .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 1199.98px) {
            .navbar-expand-xl .navbar-brand .navbar-brand-item {
                height: 24px;
            }
            .navbar-expand-xl .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-xl .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-xl .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: #fff;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-xl .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 30px;
            }
            .navbar-expand-xl .navbar-nav .nav-item > .dropdown-menu {
                background: rgba(64, 68, 72, 0.04);
            }
            .navbar-expand-xl .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06);
            }
            .navbar-expand-xl .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-xl .navbar-toggler {
                border-color: transparent !important;
            }
            .navbar-expand-xl .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-xl .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-xl .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-xl .dropdown-clickable .nav-item {
                position: static;
            }
            .navbar-expand-xl .dropdown-clickable .nav-item > .dropdown-menu[data-bs-popper] {
                position: absolute !important;
                top: 100% !important;
                left: 0;
                right: 0;
                width: 100%;
                background: #fff !important;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                border-radius: 0;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                padding: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-xl .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 12px 30px;
            }
            .navbar-expand-xl .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06) !important;
                margin-left: 0.5rem;
            }
            .navbar-expand-xl .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-xl .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu .dropdown-item {
                border-bottom: 0;
                padding: 8px 40px;
            }
            .navbar-expand-xl .dropdown-clickable .nav-item .dropdown-menu.show[data-bs-popper] {
                top: 100%;
                padding-bottom: 15px;
            }
        }
        .navbar-expand-xxl .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand-xxl .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 5 Free";
            right: 1rem;
        }
        .navbar-expand-xxl .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 5 Free";
            right: 1rem;
            position: absolute;
        }
        @media (min-width: 1400px) {
            .navbar-expand-xxl .navbar-top {
                z-index: 1100 !important;
            }
            .navbar-expand-xxl .navbar-brand .navbar-brand-item {
                height: 36px;
                display: block;
                width: auto;
            }
            .navbar-expand-xxl .navbar-nav .dropdown > .dropdown-menu {
                top: 120%;
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-xxl .navbar-nav .dropdown:hover > .dropdown-menu {
                display: block;
                top: 100%;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            .navbar-expand-xxl .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
                visibility: hidden;
                opacity: 0;
                display: block;
                -webkit-transition: all 0.1s ease-in-out;
                transition: all 0.1s ease-in-out;
            }
            .navbar-expand-xxl .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                margin-left: 0.5rem;
            }
            .navbar-expand-xxl .navbar-nav .dropdown > .dropdown-toggle:active {
                pointer-events: none;
            }
            .navbar-expand-xxl .navbar-nav .nav-link {
                line-height: 40px;
                font-weight: 500;
            }
            .navbar-expand-xxl .dropdown-menu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked {
                z-index: 5;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-submenu {
                z-index: unset !important;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-menu {
                z-index: -1;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-menu > * {
                z-index: 1;
                position: relative;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-menu:before {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background: #fff;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                border-radius: inherit;
            }
            .navbar-expand-xxl .dropdown-menu-shadow-stacked .dropdown-menu li {
                position: relative;
            }
        }
        @media (max-width: 1399.98px) {
            .navbar-expand-xxl .navbar-brand .navbar-brand-item {
                height: 24px;
            }
            .navbar-expand-xxl .navbar-brand {
                padding: 20px 0;
            }
            .navbar-expand-xxl .navbar-nav-scroll {
                max-height: var(--bs-scroll-height, 65vh);
            }
            .navbar-expand-xxl .navbar-collapse {
                -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
                position: absolute;
                left: 0;
                right: 0;
                top: 100%;
                background: #fff;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-xxl .navbar-collapse .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 30px;
            }
            .navbar-expand-xxl .navbar-nav .nav-item > .dropdown-menu {
                background: rgba(64, 68, 72, 0.04);
            }
            .navbar-expand-xxl .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06);
            }
            .navbar-expand-xxl .navbar-collapse .navbar-nav .dropdown-toggle::after {
                position: absolute;
                right: 25px;
            }
            .navbar-expand-xxl .navbar-toggler {
                border-color: transparent !important;
            }
            .navbar-expand-xxl .offcanvas-body {
                padding: 1rem 0.875rem;
            }
            .navbar-expand-xxl .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 8px 0;
            }
            .navbar-expand-xxl .offcanvas-body .navbar-nav .dropdown-toggle::after {
                position: absolute;
            }
            .navbar-expand-xxl .dropdown-clickable .nav-item {
                position: static;
            }
            .navbar-expand-xxl .dropdown-clickable .nav-item > .dropdown-menu[data-bs-popper] {
                position: absolute !important;
                top: 100% !important;
                left: 0;
                right: 0;
                width: 100%;
                background: #fff !important;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                border-radius: 0;
                -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
                padding: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.1);
            }
            .navbar-expand-xxl .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-item {
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
                padding: 12px 30px;
            }
            .navbar-expand-xxl .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu {
                background: rgba(64, 68, 72, 0.06) !important;
                margin-left: 0.5rem;
            }
            .navbar-expand-xxl .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-toggle:after {
                position: absolute;
            }
            .navbar-expand-xxl .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu .dropdown-item {
                border-bottom: 0;
                padding: 8px 40px;
            }
            .navbar-expand-xxl .dropdown-clickable .nav-item .dropdown-menu.show[data-bs-popper] {
                top: 100%;
                padding-bottom: 15px;
            }
        }
        .navbar-expand .dropdown-toggle:after {
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            margin-left: 0.35rem;
            font-weight: 900;
            vertical-align: middle;
            border: none;
        }
        .navbar-expand .dropdown-submenu.dropend .dropdown-toggle:after {
            content: "\f141";
            font-family: "Font Awesome 5 Free";
            right: 1rem;
        }
        .navbar-expand .dropdown-submenu.dropstart .dropdown-toggle:before {
            content: "\f141";
            margin-right: 0;
            font-family: "Font Awesome 5 Free";
            right: 1rem;
            position: absolute;
        }
        .navbar-expand .navbar-top {
            z-index: 1100 !important;
        }
        .navbar-expand .navbar-brand .navbar-brand-item {
            height: 36px;
            display: block;
            width: auto;
        }
        .navbar-expand .navbar-nav .dropdown > .dropdown-menu {
            top: 120%;
            visibility: hidden;
            opacity: 0;
            display: block;
            -webkit-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
        }
        .navbar-expand .navbar-nav .dropdown:hover > .dropdown-menu {
            display: block;
            top: 100%;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .navbar-expand .navbar-nav .dropdown .dropdown-submenu > .dropdown-menu {
            visibility: hidden;
            opacity: 0;
            display: block;
            -webkit-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
        }
        .navbar-expand .navbar-nav .dropdown .dropdown-submenu:hover > .dropdown-menu {
            display: block;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            margin-left: 0.5rem;
        }
        .navbar-expand .navbar-nav .dropdown > .dropdown-toggle:active {
            pointer-events: none;
        }
        .navbar-expand .navbar-nav .nav-link {
            line-height: 40px;
            font-weight: 500;
        }
        .navbar-expand .dropdown-menu .dropdown-toggle:after {
            position: absolute;
        }
        .navbar-expand .dropdown-menu-shadow-stacked {
            z-index: 5;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-submenu {
            z-index: unset !important;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-menu {
            z-index: -1;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-menu > * {
            z-index: 1;
            position: relative;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-menu:before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background: #fff;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            border-radius: inherit;
        }
        .navbar-expand .dropdown-menu-shadow-stacked .dropdown-menu li {
            position: relative;
        }
        .navbar-expand .navbar-brand .navbar-brand-item {
            height: 24px;
        }
        .navbar-expand .navbar-brand {
            padding: 20px 0;
        }
        .navbar-expand .navbar-nav-scroll {
            max-height: var(--bs-scroll-height, 65vh);
        }
        .navbar-expand .navbar-collapse {
            -webkit-box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
            box-shadow: 0px 10px 30px rgba(83, 88, 93, 0.4);
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            background: #fff;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
        .navbar-expand .navbar-collapse .navbar-nav .nav-item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 8px 30px;
        }
        .navbar-expand .navbar-nav .nav-item > .dropdown-menu {
            background: rgba(64, 68, 72, 0.04);
        }
        .navbar-expand .navbar-nav .nav-item > .dropdown-menu .dropdown-submenu .dropdown-menu {
            background: rgba(64, 68, 72, 0.06);
        }
        .navbar-expand .navbar-collapse .navbar-nav .dropdown-toggle::after {
            position: absolute;
            right: 25px;
        }
        .navbar-expand .navbar-toggler {
            border-color: transparent !important;
        }
        .navbar-expand .offcanvas-body {
            padding: 1rem 0.875rem;
        }
        .navbar-expand .offcanvas-body .navbar-nav .nav-item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 8px 0;
        }
        .navbar-expand .offcanvas-body .navbar-nav .dropdown-toggle::after {
            position: absolute;
        }
        .navbar-expand .dropdown-clickable .nav-item {
            position: static;
        }
        .navbar-expand .dropdown-clickable .nav-item > .dropdown-menu[data-bs-popper] {
            position: absolute !important;
            top: 100% !important;
            left: 0;
            right: 0;
            width: 100%;
            background: #fff !important;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            border-radius: 0;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            padding: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
        .navbar-expand .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-item {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 12px 30px;
        }
        .navbar-expand .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu {
            background: rgba(64, 68, 72, 0.06) !important;
            margin-left: 0.5rem;
        }
        .navbar-expand .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-toggle:after {
            position: absolute;
        }
        .navbar-expand .dropdown-clickable .nav-item .dropdown-menu[data-bs-popper] .dropdown-submenu .dropdown-menu .dropdown-item {
            border-bottom: 0;
            padding: 8px 40px;
        }
        .navbar-expand .dropdown-clickable .nav-item .dropdown-menu.show[data-bs-popper] {
            top: 100%;
            padding-bottom: 15px;
        }

        @media (min-width: 1200px) {
            header.navbar-sticky-on {
                position: fixed;
                z-index: 1020;
                top: 0;
                left: 0;
                right: 0;
                background-color: #fff;
                -webkit-animation: fadeInDown 0.5s;
                animation: fadeInDown 0.5s;
                width: 100%;
                border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            }

            header.navbar-sticky-on .navbar-top {
                display: none !important;
            }

            header.navbar-sticky-on .navbar-brand {
                padding: 14px 0;
            }

            header.navbar-sticky-on .navbar-brand .navbar-brand-item {
                height: 22px;
            }
        }
        @-webkit-keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }
        .navbar-transparent {
            background: transparent;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }

        .navbar-toggler {
            padding: 10px 10px;
        }

        .navbar-toggler.plyr-toggler {
            right: 100%;
            position: absolute;
            border: 0;
            border-radius: 0;
            border-bottom-left-radius: 0.325rem !important;
            border-top-left-radius: 0.325rem !important;
            opacity: 0.6;
        }
        .navbar-toggler.plyr-toggler:hover {
            opacity: 1;
        }
        .navbar-toggler.plyr-toggler[aria-expanded=true] {
            opacity: 1;
        }

        .navbar-toggler .navbar-toggler-animation {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-image: none;
            position: relative;
            height: 22px;
            width: 22px;
            display: inline-block;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .navbar-toggler .navbar-toggler-animation span {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-transform: rotateZ(0deg);
            transform: rotateZ(0deg);
            height: 2px;
            background: #24292d;
            display: block;
            position: absolute;
            width: 100%;
            border-radius: 30px;
        }

        .navbar-toggler .navbar-toggler-animation span:nth-child(1) {
            top: 6%;
        }

        .navbar-toggler .navbar-toggler-animation span:nth-child(2) {
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .navbar-toggler .navbar-toggler-animation span:nth-child(3) {
            bottom: 10%;
        }

        .navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(1) {
            -webkit-transform: rotateZ(45deg) translateY(-50%);
            transform: rotateZ(45deg) translateY(-50%);
            top: 50%;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            width: 100%;
        }

        .navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(2) {
            visibility: hidden;
            -webkit-transition: all 0s ease-in-out;
            transition: all 0s ease-in-out;
        }

        .navbar-toggler[data-bs-toggle=collapse][aria-expanded=true] .navbar-toggler-animation span:nth-child(3) {
            -webkit-transform: rotateZ(-45deg) translateY(-50%);
            transform: rotateZ(-45deg) translateY(-50%);
            bottom: 42%;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            width: 100%;
        }

        .pagination .page-item {
            margin-bottom: 5px;
            float: left;
        }

        .pagination-primary-soft {
            border: none;
            padding: 4px;
            border-radius: 0.325rem;
        }
        .pagination-primary-soft .page-item {
            margin: 4px;
        }
        .pagination-primary-soft .page-link {
            border: transparent;
            border-radius: 0.325rem !important;
            color: #066ac9;
            background-color: rgba(6, 106, 201, 0.1);
        }

        .pagination-primary-soft .page-link:hover {
            z-index: 2;
            color: #fff;
            background-color: #066ac9;
            border-color: #066ac9;
        }

        .progress {
            position: relative;
            overflow-x: visible;
            overflow-y: visible;
        }
        .progress .progress-bar {
            position: relative;
            overflow: visible;
            border-radius: 0.325rem;
        }
        .progress .progress-percent {
            color: #747579;
            font-weight: 500;
            line-height: 24px;
            position: absolute;
            right: 0;
            top: -24px;
            font-size: 12px;
        }
        .progress .progress-percent-simple {
            position: absolute;
            right: 0;
            top: -20px;
            font-size: 14px;
        }

        .progress.progress-percent-bg .progress-percent {
            background: #24292d;
            padding: 2px 5px;
            border-radius: 2px;
            color: #fff;
            line-height: 16px;
            position: absolute;
            right: 0;
            top: -25px;
            font-size: 10px;
        }
        .progress.progress-percent-bg .progress-percent:before {
            border-top-color: #24292d;
            border-width: 5px;
            left: 50%;
            margin-left: -5px;
        }
        .progress.progress-percent-bg .progress-percent:after, .progress.progress-percent-bg .progress-percent:before {
            top: 100%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }
        .progress.progress-percent-bg .progress-percent:after {
            border-top-color: #24292d;
            border-width: 4px;
            left: 50%;
            margin-left: -4px;
        }

        .progress.progress-xs {
            height: 3px;
        }
        .progress.progress-sm {
            height: 5px;
        }
        .progress.progress-md {
            height: 10px;
        }
        .progress.progress-lg {
            height: 16px;
        }
        .progress.progress-xl {
            height: 20px;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            height: 100%;
            overflow-x: hidden;
            z-index: 0;
            position: relative;
        }

        main {
            background-color: #fff;
        }

        header {
            position: relative;
            z-index: 1020;
            background: #fff;
        }

        a {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        h1 > a, h2 > a, h3 > a, h4 > a, h5 > a, h6 > a, .h1 > a, .h2 > a, .h3 > a, .h4 > a, .h5 > a, .h6 > a {
            color: #24292d;
        }
        h1 > a:hover, h2 > a:hover, h3 > a:hover, h4 > a:hover, h5 > a:hover, h6 > a:hover, .h1 > a:hover, .h2 > a:hover, .h3 > a:hover, .h4 > a:hover, .h5 > a:hover, .h6 > a:hover {
            color: #066ac9;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        video {
            background-size: cover;
            display: table-cell;
            vertical-align: middle;
            width: 100%;
        }

        section {
            padding-top: 3.5rem;
            padding-bottom: 2.8rem;
        }

        @media (max-width: 767.98px) {
            section {
                padding-top: 4rem;
                padding-bottom: 3rem;
            }
        }
        .table.table-dark-gray thead {
            background-color: #24292d !important;
            color: #fff;
        }
        .table.table-dark-gray tbody {
            border-top: none;
        }

        .table td, .table th {
            white-space: nowrap;
        }

        @media (min-width: 767.98px) {
            .table-responsive .table td, .table-responsive .table th {
                white-space: inherit;
            }
        }
        @media (max-width: 767.98px) {
            .table-responsive .table-responsive-title {
                width: 200px;
                white-space: normal;
            }
        }
        .table-border-color {
            border-color: #dde0e3;
        }

        .bg-grad {
            background: -webkit-gradient(linear, left bottom, left top, from(#f28e26), to(#fd644f));
            background: linear-gradient(360deg, #f28e26 0%, #fd644f 100%);
        }

        .bg-grad-pink {
            background: -webkit-gradient(linear, left bottom, left top, from(#ff887c), to(#b6325f));
            background: linear-gradient(360deg, #ff887c 0%, #b6325f 100%);
        }

        .bg-grad-blue {
            background: -webkit-gradient(linear, left bottom, left top, from(#066ac9), to(#064f8a));
            background: linear-gradient(360deg, #066ac9 0%, #064f8a 100%);
        }

        .bg-danger-soft-hover:hover, .bg-danger-soft-hover:active, .bg-danger-soft-hover:focus {
            background-color: rgba(214, 41, 62, 0.1) !important;
            color: #d6293e !important;
        }

        .bg-primary-soft-hover:hover {
            background-color: rgba(6, 106, 201, 0.1);
        }

        .transition-base {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .bg-overlay {
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
        }

        small,
        .small {
            font-weight: 400;
        }

        .smaller {
            font-size: 0.7em;
            font-weight: 400;
        }

        .dropcap {
            font-size: 4em;
            font-weight: bold;
            display: block;
            float: left;
            margin: 0.04em 0.2em 0 0;
            color: #24292d;
            line-height: 1;
        }

        .bg-blur {
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
        }

        .bg-facebook {
            background-color: #5d82d1;
            color: #fff;
        }
        .bg-facebook:hover {
            background-color: #5475bc;
            color: #fff;
        }

        .text-facebook {
            color: #5d82d1;
        }
        .text-facebook:hover {
            color: #5475bc;
        }

        .bg-instagram {
            background: #c22b72;
            color: #fff;
        }
        .bg-instagram:hover {
            background-color: #af2767;
            color: #fff;
        }

        .text-instagram {
            color: #c22b72;
        }
        .text-instagram:hover {
            color: #af2767;
        }

        .bg-instagram-gradient {
            background: radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            color: #fff;
            background-size: 120% 120%;
            background-position: right bottom;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            border: 0;
        }
        .bg-instagram-gradient:hover {
            background: radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            color: #fff;
            background-size: 100% 100%;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-position: left bottom;
        }

        .text-instagram-gradient {
            color: transparent;
            background: radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background-size: 120% 120%;
        }
        .text-instagram-gradient:hover {
            color: transparent;
            background: radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background: -webkit-radial-gradient(circle at 20% 130%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
            background-clip: text;
            -webkit-background-clip: text;
            background-size: 100% 100%;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .bg-google {
            background-color: #3c7ff1;
            color: #fff;
        }
        .bg-google:hover {
            background-color: #3672d9;
            color: #fff;
        }

        .text-google {
            color: #3c7ff1;
        }
        .text-google:hover {
            color: #3672d9;
        }

        .text-google-icon {
            background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .bg-twitter {
            background-color: #40bff5;
            color: #fff;
        }
        .bg-twitter:hover {
            background-color: #3aacdd;
            color: #fff;
        }

        .text-twitter {
            color: #40bff5;
        }
        .text-twitter:hover {
            color: #3aacdd;
        }

        .bg-linkedin {
            background-color: #238cc8;
            color: #fff;
        }
        .bg-linkedin:hover {
            background-color: #207eb4;
            color: #fff;
        }

        .text-linkedin {
            color: #238cc8;
        }
        .text-linkedin:hover {
            color: #207eb4;
        }

        .bg-pinterest {
            background-color: #e60023;
            color: #fff;
        }
        .bg-pinterest:hover {
            background-color: #cf0020;
            color: #fff;
        }

        .text-pinterest {
            color: #e60023;
        }
        .text-pinterest:hover {
            color: #cf0020;
        }

        .bg-dribbble {
            background-color: #f7659c;
            color: #fff;
        }
        .bg-dribbble:hover {
            background-color: #de5b8c;
            color: #fff;
        }

        .text-dribbble {
            color: #f7659c;
        }
        .text-dribbble:hover {
            color: #de5b8c;
        }

        .bg-youtube {
            background-color: #ff0000;
            color: #fff;
        }
        .bg-youtube:hover {
            background-color: #e60000;
            color: #fff;
        }

        .text-youtube {
            color: #ff0000;
        }
        .text-youtube:hover {
            color: #e60000;
        }

        .bg-skype {
            background-color: #13c1f3;
            color: #fff;
        }
        .bg-skype:hover {
            background-color: #11aedb;
            color: #fff;
        }

        .text-skype {
            color: #13c1f3;
        }
        .text-skype:hover {
            color: #11aedb;
        }

        .form-check .form-check-input, .form-check .form-check-label {
            cursor: pointer;
        }

        .form-check.form-check-md .form-check-input {
            height: 1.3em;
            width: 1.3em;
            margin-top: 0.15em;
        }
        .form-check.form-check-md .form-check-input,
        .form-check.form-check-md .form-check-label {
            padding-left: 0.6em;
        }

        .form-switch.form-check-md .form-check-input {
            width: 2.4em;
        }
        .form-switch.form-check-lg .form-check-input {
            height: 2em;
            width: 4em;
            margin-top: 0.15em;
        }
        .form-switch.form-check-lg .form-check-input .form-check-input {
            width: 3.4em;
        }

        .bg-light-input .form-control {
            background-color: #f5f7f9 !important;
            border: 1px solid #f5f7f9 !important;
            border-radius: 0.325rem;
        }
        .bg-light-input .form-control:focus {
            border: 1px solid #066ac9 !important;
        }

        .bg-light-input .choices .choices__inner {
            background-color: #f5f7f9 !important;
            border: 1px solid #f5f7f9 !important;
            border-radius: 0.325rem !important;
        }

        .bg-light-input .choices[aria-expanded=true] .choices__inner {
            border: 1px solid #066ac9 !important;
        }

        .bg-dark-input .form-control {
            background-color: rgba(255, 255, 255, 0.1) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 0.325rem;
            color: #fff;
        }
        .bg-dark-input .form-control:focus {
            border: 1px solid rgba(255, 255, 255, 0.4) !important;
        }

        .input-borderless input {
            border: none;
        }

        .text-truncate-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .plyr__control--overlaid,
        .plyr--audio .plyr__control.plyr__tab-focus,
        .plyr--audio .plyr__control:hover,
        .plyr--audio .plyr__control[aria-expanded=true],
        .plyr--video .plyr__control.plyr__tab-focus,
        .plyr--video .plyr__control:hover,
        .plyr--video .plyr__control[aria-expanded=true],
        .plyr__menu__container .plyr__control[role=menuitemradio][aria-checked=true]:before {
            background: #066ac9;
        }

        .plyr--full-ui input[type=range] {
            color: #066ac9;
        }

        /* rtl:raw:
.glightbox-clean .gclose, .glightbox-modern .gclose{
  right: auto !important;
  left: 20px;
}
*/
        .nav-search .dropdown-menu {
            top: 120%;
            visibility: hidden;
            opacity: 0;
            display: block;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            width: 300px;
            left: auto;
            right: 0;
        }

        .nav-search .dropdown-menu.show {
            top: 100%;
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 575.98px) {
            .nav-search .dropdown-menu {
                width: 100%;
            }
        }
        .back-top {
            cursor: pointer;
            position: fixed !important;
            bottom: 40px;
            right: 40px;
            display: block;
            z-index: 99;
            visibility: hidden;
            opacity: 0;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background: rgba(6, 106, 201, 0.2);
            color: #066ac9;
            border-radius: 10%;
            width: 52px;
            height: 52px;
            line-height: 52px;
            text-align: center;
        }
        .back-top i {
            font-size: 1.6rem;
            vertical-align: middle;
        }
        .back-top:hover {
            background: #066ac9;
            color: #fff;
        }
        .back-top.back-top-show {
            visibility: visible;
            opacity: 1;
            -webkit-transform: translateY(0%);
            transform: translateY(0%);
        }

        @media (max-width: 767.98px) {
            .back-top {
                bottom: 10px;
                right: 10px;
                width: 30px;
                height: 30px;
                line-height: 30px;
            }
            .back-top i {
                font-size: 1rem;
            }
        }
        /* rtl:raw:
  .rtl-flip {
    transform: scaleX(-1);
  }
  .rtl-flip.bi:before{
    transform: inherit;
  }
*/
        .ribbon {
            position: absolute;
            top: 15px;
            left: 0;
            background: #fff;
            padding: 0 10px;
            color: #24292d;
            -webkit-box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.15);
        }

        .ribbon::before {
            content: "";
            position: absolute;
            top: 0px;
            right: -20px;
            border-top: 0.746em solid #fff;
            border-bottom: 0.746em solid #fff;
            border-right: 20px solid transparent;
            border-left: 0px solid transparent;
        }

        .uploadremove {
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            border: 0;
            padding: 0;
            background: #dc3545;
            border-radius: 50%;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .sticky-element {
            position: fixed;
            bottom: 50px;
            left: 50px;
            width: 300px;
            visibility: hidden;
            z-index: 1000;
            opacity: 0;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .sticky-element.sticky-element-sticked {
            visibility: visible;
            opacity: 1;
            -webkit-transform: translateX(0%);
            transform: translateX(0%);
        }

        .bi.fa-fw {
            display: inline-block;
        }

        .preloader {
            background-color: #fff;
            position: fixed;
            z-index: 1190;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
        }
        .preloader .preloader-item {
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .btn-success-soft-check {
            background-color: #f5f7f9;
            text-align: start;
        }

        .btn-success-soft-check:hover {
            background-color: rgba(12, 188, 135, 0.2);
            border: 1px solid #0cbc87;
        }

        .btn-check:active + .btn-success-soft-check, .btn-check:checked + .btn-success-soft-check, .btn-success-soft-check.active, .btn-success-soft-check:active, .show > .btn-success-soft-check.dropdown-toggle {
            background-color: rgba(12, 188, 135, 0.2);
            color: none;
            border: 1px solid #0cbc87 !important;
        }

        .btn-check:focus + .btn, .btn-round-shadow:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .btn-primary-check {
            border: 1px solid #9a9ea4;
        }

        .btn-primary-check:hover {
            background-color: #066ac9;
            color: #fff;
            border: 1px solid #066ac9;
        }

        .btn-check:active + .btn-primary-check, .btn-check:checked + .btn-primary-check, .btn-primary-check.active, .btn-primary-check:active, .show > .btn-primary-check.dropdown-toggle {
            background-color: #066ac9;
            color: #fff;
            border: 1px solid #066ac9;
        }

        .btn-check:focus + .btn, .btn-round-shadow:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .avatar {
            height: 3rem;
            width: 3rem;
            position: relative;
            display: inline-block !important;
        }

        .avatar-img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .avatar-group {
            padding: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }
        .avatar-group > li {
            position: relative;
        }
        .avatar-group > li:not(:last-child) {
            margin-right: -0.8rem;
        }
        .avatar-group .avatar-img {
            border: 2px solid #fff;
        }

        .avatar .avatar-name {
            margin-left: 7px;
        }

        .avatar-xs {
            height: 2.1875rem;
            width: 2.1875rem;
        }

        .avatar-sm {
            height: 2.5rem;
            width: 2.5rem;
        }

        .avatar-lg {
            height: 4rem;
            width: 4rem;
        }

        .avatar-xl {
            height: 5.125rem;
            width: 5.125rem;
        }

        .avatar-xxl {
            height: 5.125rem;
            width: 5.125rem;
        }
        @media (min-width: 768px) {
            .avatar-xxl {
                width: 8rem;
                height: 8rem;
            }
        }

        .avatar-xxxl {
            height: 8rem;
            width: 8rem;
        }
        @media (min-width: 768px) {
            .avatar-xxxl {
                width: 11rem;
                height: 11rem;
            }
        }

        .modeswitch-wrap {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
        }
        .modeswitch-wrap .modeswitch-item {
            width: 42px;
            height: 12px;
            background: #747579;
            border-radius: 60px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 16px;
            -webkit-transition: all 1s;
            transition: all 1s;
        }
        .modeswitch-wrap .modeswitch-item .modeswitch-icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-transform: translateX(-14%);
            transform: translateX(-14%);
            height: 26px;
            width: 26px;
            background: #d8831b;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.4);
            font-size: 14px;
            color: #fff;
            -webkit-transition: all 1s;
            transition: all 1s;
        }
        .modeswitch-wrap .modeswitch-item .modeswitch-icon:before {
            content: "\f185";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            border: none;
            height: 26px;
            width: 26px;
            line-height: 26px;
            text-align: center;
            display: block;
        }

        html[data-theme=dark] .modeswitch-item {
            background: #cfd3d7;
        }
        html[data-theme=dark] .modeswitch-item .modeswitch-icon {
            -webkit-transform: translateX(18px) rotate(1turn);
            transform: translateX(18px) rotate(1turn);
            background: #24292d;
        }
        html[data-theme=dark] .modeswitch-item .modeswitch-icon:before {
            content: "\f186";
        }

        .navbar-dark .modeswitch-item {
            background: #9a9ea4;
        }

        .dark-mode-item {
            display: none !important;
        }

        html[data-theme=dark] .dark-mode-item {
            display: block !important;
        }
        html[data-theme=dark] .light-mode-item {
            display: none !important;
        }

        .text-primary-hover a {
            color: #cfd3d7;
        }
        .text-primary-hover a:hover {
            color: #066ac9 !important;
        }

        a.text-primary-hover, button.text-primary-hover {
            color: #747579;
        }
        a.text-primary-hover:hover, button.text-primary-hover:hover {
            color: #066ac9 !important;
        }

        .text-primary-hover li {
            color: #cfd3d7;
        }
        .text-primary-hover li:hover {
            color: #066ac9 !important;
        }

        .font-base {
            font-family: "Roboto", sans-serif !important;
        }

        .font-heading {
            font-family: "Heebo", sans-serif !important;
        }

        .grayscale {
            -webkit-filter: grayscale(100%);
            filter: grayscale(100%);
            -webkit-transition: all 0.6s ease;
            transition: all 0.6s ease;
        }
        .grayscale:hover {
            filter: none;
            -webkit-filter: grayscale(0%);
        }

        .zoom-hover {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        .zoom-hover:hover {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .icon-sm {
            width: 1.5rem;
            height: 1.5rem;
            line-height: 1.5rem;
            text-align: center;
            font-size: 75%;
        }

        .icon-md {
            width: 2.6rem;
            height: 2.6rem;
            line-height: 2.6rem;
            text-align: center;
            font-size: 0.8rem;
        }

        .icon-lg {
            width: 3.5rem;
            height: 3.5rem;
            line-height: 3.5rem;
            text-align: center;
            font-size: 1.2rem;
        }

        .icon-xl {
            width: 5rem;
            height: 5rem;
            line-height: 5rem;
            text-align: center;
            font-size: 1.9rem;
        }

        .icon-xxl {
            width: 7rem;
            height: 7rem;
            line-height: 7rem;
            text-align: center;
            font-size: 2.5rem;
        }

        .shadow-hover:hover {
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
        }

        .sidebar {
            position: relative;
            padding: 0;
        }
        .sidebar.navbar-expand-sm .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-sm .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            background: rgba(6, 106, 201, 0.1);
            color: #066ac9 !important;
            border-radius: 0.325rem;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav-link:active {
            color: #066ac9 !important;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav-link:hover {
            color: #066ac9;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav-link:focus {
            color: #fff !important;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: #ddd;
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav-link {
            line-height: 40px;
        }
        .sidebar.navbar-expand-sm .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            padding-left: 2.5rem;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-sm .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 576px) {
            .sidebar.navbar-expand-sm {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-sm .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-sm .navbar-brand {
                padding: 1.3rem;
            }
            .sidebar.navbar-expand-sm .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 575.98px) {
            .sidebar.navbar-expand-sm {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-sm .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-sm .sidebar-content {
                padding: 1rem;
            }
            .sidebar.navbar-expand-sm .navbar-nav > .nav-item > .nav-link {
                padding: 0.2rem;
                margin-bottom: 0;
                font-size: 0.938rem;
            }
            .sidebar.navbar-expand-sm .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand-md .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-md .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            background: rgba(6, 106, 201, 0.1);
            color: #066ac9 !important;
            border-radius: 0.325rem;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav-link:active {
            color: #066ac9 !important;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav-link:hover {
            color: #066ac9;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav-link:focus {
            color: #fff !important;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: #ddd;
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav-link {
            line-height: 40px;
        }
        .sidebar.navbar-expand-md .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            padding-left: 2.5rem;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-md .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 768px) {
            .sidebar.navbar-expand-md {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-md .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-md .navbar-brand {
                padding: 1.3rem;
            }
            .sidebar.navbar-expand-md .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 767.98px) {
            .sidebar.navbar-expand-md {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-md .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-md .sidebar-content {
                padding: 1rem;
            }
            .sidebar.navbar-expand-md .navbar-nav > .nav-item > .nav-link {
                padding: 0.2rem;
                margin-bottom: 0;
                font-size: 0.938rem;
            }
            .sidebar.navbar-expand-md .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand-lg .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-lg .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            background: rgba(6, 106, 201, 0.1);
            color: #066ac9 !important;
            border-radius: 0.325rem;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav-link:active {
            color: #066ac9 !important;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav-link:hover {
            color: #066ac9;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav-link:focus {
            color: #fff !important;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: #ddd;
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav-link {
            line-height: 40px;
        }
        .sidebar.navbar-expand-lg .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            padding-left: 2.5rem;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-lg .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 992px) {
            .sidebar.navbar-expand-lg {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-lg .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-lg .navbar-brand {
                padding: 1.3rem;
            }
            .sidebar.navbar-expand-lg .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 991.98px) {
            .sidebar.navbar-expand-lg {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-lg .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-lg .sidebar-content {
                padding: 1rem;
            }
            .sidebar.navbar-expand-lg .navbar-nav > .nav-item > .nav-link {
                padding: 0.2rem;
                margin-bottom: 0;
                font-size: 0.938rem;
            }
            .sidebar.navbar-expand-lg .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand-xl .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-xl .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            background: rgba(6, 106, 201, 0.1);
            color: #066ac9 !important;
            border-radius: 0.325rem;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav-link:active {
            color: #066ac9 !important;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav-link:hover {
            color: #066ac9;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav-link:focus {
            color: #fff !important;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: #ddd;
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav-link {
            line-height: 40px;
        }
        .sidebar.navbar-expand-xl .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            padding-left: 2.5rem;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-xl .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 1200px) {
            .sidebar.navbar-expand-xl {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-xl .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-xl .navbar-brand {
                padding: 1.3rem;
            }
            .sidebar.navbar-expand-xl .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 1199.98px) {
            .sidebar.navbar-expand-xl {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-xl .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-xl .sidebar-content {
                padding: 1rem;
            }
            .sidebar.navbar-expand-xl .navbar-nav > .nav-item > .nav-link {
                padding: 0.2rem;
                margin-bottom: 0;
                font-size: 0.938rem;
            }
            .sidebar.navbar-expand-xl .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand-xxl .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand-xxl .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            background: rgba(6, 106, 201, 0.1);
            color: #066ac9 !important;
            border-radius: 0.325rem;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav-link:active {
            color: #066ac9 !important;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav-link:hover {
            color: #066ac9;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav-link:focus {
            color: #fff !important;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: #ddd;
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav-link {
            line-height: 40px;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            padding-left: 2.5rem;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand-xxl .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        @media (min-width: 1400px) {
            .sidebar.navbar-expand-xxl {
                position: fixed;
                z-index: 1030;
                top: 0;
                left: 0;
                height: 100vh;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: stretch;
                -ms-flex-align: stretch;
                align-items: stretch;
            }
            .sidebar.navbar-expand-xxl .offcanvas {
                position: relative;
            }
            .sidebar.navbar-expand-xxl .navbar-brand {
                padding: 1.3rem;
            }
            .sidebar.navbar-expand-xxl .navbar-nav .nav-item {
                position: relative;
            }
        }
        @media (max-width: 1399.98px) {
            .sidebar.navbar-expand-xxl {
                position: absolute;
                left: -300px;
                height: 100vh;
                z-index: 9;
            }
            .sidebar.navbar-expand-xxl .navbar-brand {
                display: none;
            }
            .sidebar.navbar-expand-xxl .sidebar-content {
                padding: 1rem;
            }
            .sidebar.navbar-expand-xxl .navbar-nav > .nav-item > .nav-link {
                padding: 0.2rem;
                margin-bottom: 0;
                font-size: 0.938rem;
            }
            .sidebar.navbar-expand-xxl .offcanvas .offcanvas-body .navbar-nav .nav-item {
                border-bottom: 0;
                padding: 0;
            }
        }
        .sidebar.navbar-expand {
            position: fixed;
            z-index: 1030;
            top: 0;
            left: 0;
            height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            position: absolute;
            left: -300px;
            height: 100vh;
            z-index: 9;
        }
        .sidebar.navbar-expand .sidebar-content {
            padding: 0 1rem 1rem;
            width: 16.25rem;
            height: 100%;
        }
        .sidebar.navbar-expand .offcanvas {
            width: auto;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav > .nav-item > .nav-link[data-bs-toggle=collapse][aria-expanded=true] {
            background: rgba(6, 106, 201, 0.1);
            color: #066ac9 !important;
            border-radius: 0.325rem;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav-link:active {
            color: #066ac9 !important;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav-link:hover {
            color: #066ac9;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav-link:focus {
            color: #fff !important;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse] {
            position: relative;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse]:before, .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            content: "";
            background: #ddd;
            border-radius: 1px;
            display: block;
            position: absolute;
            height: 2px;
            width: 7px;
            margin: auto 12px;
            -webkit-transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out;
            transition: transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1), background 0.2s ease-in-out, -webkit-transform 0.3s cubic-bezier(0.8, 0.2, 0.5, 0.1);
            top: 0;
            bottom: 0;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse]:before {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            right: 0px;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse]:after {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            right: 5px;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:before {
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand .sidebar-content .nav-item [data-bs-toggle=collapse][aria-expanded=true]:after {
            -webkit-transform: rotate(-40deg);
            transform: rotate(-40deg);
            background: #066ac9;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav-link {
            line-height: 40px;
        }
        .sidebar.navbar-expand .sidebar-content .nav.flex-column:not(.nav-pills) .nav-link {
            padding-left: 2.5rem;
            padding-top: 0;
            padding-bottom: 0;
        }
        .sidebar.navbar-expand .sidebar-content .navbar-nav .nav {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column nowrap;
            flex-flow: column nowrap;
        }
        .sidebar.navbar-expand .offcanvas {
            position: relative;
        }
        .sidebar.navbar-expand .navbar-brand {
            padding: 1.3rem;
        }
        .sidebar.navbar-expand .navbar-nav .nav-item {
            position: relative;
        }
        .sidebar.navbar-expand .navbar-brand {
            display: none;
        }
        .sidebar.navbar-expand .sidebar-content {
            padding: 1rem;
        }
        .sidebar.navbar-expand .navbar-nav > .nav-item > .nav-link {
            padding: 0.2rem;
            margin-bottom: 0;
            font-size: 0.938rem;
        }
        .sidebar.navbar-expand .offcanvas .offcanvas-body .navbar-nav .nav-item {
            border-bottom: 0;
            padding: 0;
        }

        .sidebar-offcanvas-menu {
            background-color: rgba(6, 106, 201, 0.1);
            border-radius: 0.325rem;
        }

        .top-bar {
            position: relative;
            padding: 1.6rem;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
        }

        @media (max-width: 991.98px) {
            .top-bar .navbar-expand-lg .navbar-collapse {
                padding: 0 10px;
            }
        }
        .page-content {
            position: relative;
            height: 100%;
            display: block;
        }
        .page-content .page-content-wrapper {
            min-height: 86vh;
            margin: 1.5rem 1.5rem;
            padding: 1.5rem;
            background: #fff;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            border-radius: 6px;
            height: 100%;
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }

        @media (min-width: 1200px) {
            .page-content {
                margin-left: 16.25rem;
            }
        }
        @media (max-width: 575.98px) {
            .page-content .page-content-wrapper {
                margin: 1rem 0;
                padding: 1rem;
            }
        }
        .animation-blink {
            -webkit-animation: blink 2s infinite;
            animation: blink 2s infinite;
        }

        @-webkit-keyframes blink {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        @keyframes blink {
            0% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        .notif-badge {
            width: 10px;
            height: 10px;
            background: #d6293e;
            border-radius: 50%;
            position: absolute;
            top: -1px;
            right: -1px;
            z-index: 1;
        }

        .choices {
            margin-bottom: 0;
        }
        .choices .choices__inner {
            background-color: #fff;
            color: #404448;
            border: 1px solid #dde0e3;
            line-height: 1.5;
            border-radius: 0.325rem;
            min-height: auto;
            font-size: 0.9375rem;
            padding: 0.5rem 2.25rem 0.5rem 1rem !important;
        }
        .choices .choices__list--multiple .choices__item {
            background-color: #dde0e3;
            border: 1px solid #dde0e3;
            border-radius: 0.325rem;
            color: #747579;
        }
        .choices .choices__list--dropdown {
            background: #fff;
            border: 1px solid #dde0e3;
            z-index: 9;
            border-bottom-left-radius: 0.325rem;
            border-bottom-right-radius: 0.325rem;
        }
        .choices .choices__list--dropdown .choices__item--selectable.is-highlighted {
            background-color: #eff1f2;
        }
        .choices .choices__list--dropdown .choices__item {
            color: #747579;
        }

        .choices.is-focused .choices__inner {
            border-color: #066ac9;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .choices.is-focused[data-type*=select-one] .choices__inner, .choices.is-focused[data-type*=select-multiple] .choices__inner {
            border-color: #dde0e3 !important;
        }

        .choices__input {
            background-color: transparent;
            color: #404448;
        }

        .choices[data-type*=select-one] .choices__input {
            background: #fff;
            color: #747579;
            border-color: #dde0e3 !important;
        }

        .choices__list--single {
            padding: 0;
        }

        .choices[data-type*=select-multiple] .choices__button, .choices[data-type*=text] .choices__button {
            border-left: 1px solid #9a9ea4;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==);
        }

        .choices[data-type*=select-one]:after {
            content: "";
            height: 12px;
            width: 12px;
            border: none;
            border-width: 5px;
            position: absolute;
            right: 11.5px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin-top: 0;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23747579' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: center center;
        }

        .choices[data-type*=select-one].is-open:after {
            margin-top: 0;
        }

        .choices__list--dropdown .choices__item--selectable:after {
            content: none;
        }

        .choices__list--dropdown .choices__item--selectable {
            padding-right: 0;
        }

        .choices__list--dropdown .choices__item {
            padding: 4px 10px;
        }

        .choices[data-type*=select-one] .choices__input {
            padding: 6px 10px;
        }

        .choices .choices__input {
            margin-bottom: 0;
            padding: 0;
        }

        .choices .choices__list--dropdown .choices__item--selectable.is-highlighted {
            background-color: rgba(6, 106, 201, 0.2);
            color: #066ac9;
        }

        .bottomborder-select .choices .choices__inner {
            background-color: transparent;
            color: #414953;
            border: none;
            line-height: 1.6;
            border-radius: 0;
            min-height: auto;
            border-bottom: 1px solid #cfd3d7;
        }

        .collapsing .choices__list--dropdown {
            display: none;
        }

        .collapse.show .choices__list--dropdown {
            display: block;
        }

        .choices[aria-expanded=true] .choices__inner {
            border-radius: 0.325rem 0.325rem 0 0 !important;
        }

        .choices__list--dropdown .choices__list {
            position: relative;
            max-height: 200px;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            will-change: scroll-position;
        }

        html[dir=rtl] .choices,
        html[dir=rtl] select option,
        html[dir=rtl] .choices__input {
            direction: rtl;
            unicode-bidi: bidi-override;
            text-align: left;
        }

        [dir=rtl] .choices__list--dropdown .choices__item--selectable {
            padding-left: 10px;
            padding-right: 0;
        }

        .input-borderless .choices .choices__inner {
            border: none;
        }

        .input-borderless .choices .choices__list--dropdown {
            border: none;
            margin-top: 9px;
            border-radius: 0.5rem;
            z-index: 99999;
            -webkit-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
            box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.15);
        }

        .background-light .choices .choices__inner {
            background-color: #f5f7f9;
        }

        .choices-sm .choices .choices__inner {
            padding: 0.2rem 1rem 0.2rem 1rem !important;
        }

        .tns-outer {
            position: relative;
        }

        .tns-item {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .tiny-slider .item {
            position: relative;
        }

        .tns-controls [data-controls] {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 0.325rem;
            display: block;
            z-index: 9;
            text-align: center;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            background: rgba(255, 255, 255, 0.3);
            color: #fff;
            border: none;
            margin: 0 10px;
        }
        .tns-controls [data-controls]:hover {
            background-color: #066ac9;
            color: #fff;
        }
        .tns-controls [data-controls] i {
            line-height: inherit;
        }

        .tns-controls [data-controls=prev] {
            left: 0;
        }

        .tns-controls [data-controls=next] {
            right: 0;
        }

        /* rtl:raw:
.tiny-slider .tns-controls [data-controls]{
  transform: scaleX(-1) translateY(-50%);
}
.tiny-slider.arrow-creative .tns-controls [data-controls]{
  transform: scaleX(1) translateY(-50%);
}
.tns-visually-hidden {
  right: -10000em !important;
  left: 0 !important;
}
*/
        .arrow-dark [data-controls] {
            background: #24292d;
            color: #fff;
        }

        .arrow-white [data-controls] {
            background-color: #fff;
            color: #747579;
        }

        .arrow-gray [data-controls] {
            background: #dde0e3;
            color: #24292d;
        }

        .arrow-round [data-controls] {
            border-radius: 50%;
        }

        .arrow-blur [data-controls] {
            -webkit-backdrop-filter: blur(5px);
            backdrop-filter: blur(5px);
            background: rgba(0, 0, 0, 0.4) !important;
        }
        .arrow-blur [data-controls]:hover {
            -webkit-backdrop-filter: blur(0px);
            backdrop-filter: blur(0px);
            background: rgba(0, 0, 0, 0.4) !important;
        }
        .arrow-blur.arrow-white [data-controls] {
            background-color: rgba(255, 255, 255, 0.2) !important;
            color: #fff;
        }

        .arrow-hover {
            overflow: hidden;
        }
        .arrow-hover [data-controls=prev] {
            left: -75px;
        }
        .arrow-hover [data-controls=next] {
            right: -75px;
        }
        .arrow-hover:hover [data-controls=prev] {
            left: 0px;
        }
        .arrow-hover:hover [data-controls=next] {
            right: 0px;
        }

        .arrow-xs .tns-controls [data-controls] {
            width: 30px;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
            margin: 0;
        }

        @media (max-width: 767.98px) {
            .arrow-md-none [data-controls] {
                display: none;
            }
        }
        .arrow-creative .fa-chevron-left:before {
            content: "\f060" !important;
        }

        .arrow-creative .fa-chevron-right:before {
            content: "\f061" !important;
        }

        .tns-nav {
            position: absolute;
            top: 100%;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            z-index: 10;
            width: auto;
            text-align: center;
            white-space: nowrap;
        }
        .tns-nav [data-nav] {
            position: relative;
            display: inline-block;
            margin: 0 4px;
            padding: 0;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            overflow: hidden;
            background-color: transparent;
            -webkit-box-shadow: inset 0 0 0 2px #9a9ea4;
            box-shadow: inset 0 0 0 2px #9a9ea4;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            border: 0;
        }
        .tns-nav [data-nav]:after {
            border-radius: 50%;
            overflow: hidden;
            content: "";
            position: absolute;
            bottom: 0;
            height: 0;
            left: 0;
            width: 100%;
            background-color: #9a9ea4;
            -webkit-box-shadow: 0 0 1px #9a9ea4;
            box-shadow: 0 0 1px #9a9ea4;
            -webkit-transition: height 0.3s ease-in-out;
            transition: height 0.3s ease-in-out;
        }
        .tns-nav .tns-nav-active:after {
            height: 100%;
        }

        .dots-inside .tns-nav {
            top: auto;
            padding-bottom: 20px;
        }

        .dots-primary .tns-nav [data-nav] {
            -webkit-box-shadow: inset 0 0 0 2px #066ac9;
            box-shadow: inset 0 0 0 2px #066ac9;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .dots-primary .tns-nav [data-nav]:after {
            background-color: #066ac9;
            -webkit-box-shadow: 0 0 1px #066ac9;
            box-shadow: 0 0 1px #066ac9;
        }

        .dots-white .tns-nav [data-nav] {
            -webkit-box-shadow: inset 0 0 0 2px #fff;
            box-shadow: inset 0 0 0 2px #fff;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .dots-white .tns-nav [data-nav]:after {
            background-color: #fff;
            -webkit-box-shadow: 0 0 1px #fff;
            box-shadow: 0 0 1px #fff;
        }

        .dots-dark .tns-nav [data-nav] {
            -webkit-box-shadow: inset 0 0 0 2px #24292d;
            box-shadow: inset 0 0 0 2px #24292d;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .dots-dark .tns-nav [data-nav]:after {
            background-color: #24292d;
            -webkit-box-shadow: 0 0 1px #24292d;
            box-shadow: 0 0 1px #24292d;
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            background: #fff !important;
            border: 0 !important;
            -webkit-box-shadow: 0 12px 14px rgba(107, 124, 147, 0.3);
            box-shadow: 0 12px 14px rgba(107, 124, 147, 0.3);
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #f5f7f9 !important;
            border: 0 !important;
            border-bottom: 1px solid #dde0e3 !important;
            color: #24292d;
        }

        .apexcharts-theme-light .apexcharts-tooltip-text-y-value,
        .apexcharts-theme-light .apexcharts-tooltip-text-goals-value,
        .apexcharts-theme-light .apexcharts-tooltip-text-z-value,
        .apexcharts-theme-light .apexcharts-tooltip-text-y-label {
            color: #24292d;
            margin-left: 1px !important;
        }

        .apexcharts-theme-dark .apexcharts-tooltip-text-y-value,
        .apexcharts-theme-dark .apexcharts-tooltip-text-goals-value,
        .apexcharts-theme-dark .apexcharts-tooltip-text-z-value,
        .apexcharts-theme-dark .apexcharts-tooltip-text-y-label {
            color: #fff;
            margin-left: 1px !important;
        }

        .apexcharts-legend-text, .apexcharts-text, .apexcharts-title-text, .apexcharts-text tspan, .apexcharts-tooltip-title, .apexcharts-tooltip-text, .apexcharts-xaxistooltip-text, .apexcharts-yaxistooltip-text {
            font-family: "Roboto", sans-serif !important;
        }

        .apexcharts-xaxis text, .apexcharts-yaxis text {
            fill: #cfd3d7;
        }

        .apexcharts-xaxistooltip, .apexcharts-yaxistooltip {
            background: #fff !important;
            -webkit-box-shadow: 0 3px 14px rgba(107, 124, 147, 0.3);
            box-shadow: 0 3px 14px rgba(107, 124, 147, 0.3);
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #fff !important;
        }

        .apexcharts-xaxistooltip, .apexcharts-yaxistooltip, .apexcharts-yaxistooltip-left:before, .apexcharts-xaxistooltip-bottom:before {
            border: none !important;
        }

        .apexcharts-xaxistooltip {
            color: #404448 !important;
        }

        .stepper-outline .step-trigger:hover {
            background-color: transparent;
        }
        .stepper-outline .bs-stepper-circle {
            width: 3rem;
            height: 3rem;
            border-radius: 100%;
            background-color: rgba(6, 106, 201, 0.1);
            border: 2px solid rgba(6, 106, 201, 0.4);
            color: #066ac9;
            line-height: 1.9rem;
        }
        .stepper-outline .bs-stepper-content {
            padding: 20px;
        }
        .stepper-outline .step.active .bs-stepper-circle {
            background-color: #066ac9;
            color: #fff;
            border: none;
            line-height: 2rem;
        }
        .stepper-outline .step .bs-stepper-label {
            margin: 0;
        }
        .stepper-outline .step.active .bs-stepper-label {
            color: #066ac9;
        }

        .step-trigger {
            padding: 5px;
        }
        .step-trigger:hover {
            text-decoration: none;
            background-color: transparent;
        }

        @media (max-width: 767.98px) {
            .stepper-outline .bs-stepper-circle {
                width: 2.5rem;
                height: 2.5rem;
                line-height: 1.4rem;
            }

            .stepper-outline .step.active .bs-stepper-circle {
                line-height: 1.6rem;
            }

            .stepper-outline .bs-stepper-content {
                padding: 5px;
            }
        }
        .fullscreen-video .plyr--video {
            height: 100vh;
        }

        .plyr--stopped.plyr__poster-enabled .plyr__poster {
            background-size: cover;
        }

        .video-player .plyr--video {
            border-radius: 0.5rem;
        }

        .ql-snow .ql-picker {
            color: #747579;
        }
        .ql-snow .ql-fill, .ql-snow .ql-stroke.ql-fill {
            fill: #24292d;
        }
        .ql-snow .ql-stroke {
            stroke: #747579;
        }

        /*User CSS*/
        /*# sourceMappingURL=style.css.map */

    </style>
</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>

   @include('layouts.sidebar')
    <!-- Page content START -->
    <div class="page-content">
        @include('layouts.navbar')
        <!-- Page main content START -->
        @yield('content')
        <!-- Page main content END -->
    </div>
    <!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- Vendors -->
<script src="{{asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/apexcharts/js/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js')}}"></script>

<!-- Template Functions -->
<script src="{{asset('assets/js/functions.js')}}"></script>


</body>
</html>
