<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Легион Авто / режим разработки</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! tailwindcss v2.2.4 | MIT License | https://tailwindcss.com */

        /*! modern-normalize v1.1.0 | MIT License | https://github.com/sindresorhus/modern-normalize */

        /*
        Document
        ========
        */

        /**
        Use a better box model (opinionated).
        */

        *,
        ::before,
        ::after {
            box-sizing: border-box;
        }

        /**
        Use a more readable tab size (opinionated).
        */

        html {
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
        }

        /**
        1. Correct the line height in all browsers.
        2. Prevent adjustments of font size after orientation changes in iOS.
        */

        html {
            line-height: 1.15;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }

        /*
        Sections
        ========
        */

        /**
        Remove the margin in all browsers.
        */

        body {
            margin: 0;
        }

        /**
        Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3)
        */

        body {
            font-family: system-ui,
            -apple-system, /* Firefox supports this but not yet `system-ui` */ 'Segoe UI',
            Roboto,
            Helvetica,
            Arial,
            sans-serif,
            'Apple Color Emoji',
            'Segoe UI Emoji';
        }

        /*
        Grouping content
        ================
        */

        /**
        1. Add the correct height in Firefox.
        2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
        */

        hr {
            height: 0;
            /* 1 */
            color: inherit;
            /* 2 */
        }

        /*
        Text-level semantics
        ====================
        */

        /**
        Add the correct text decoration in Chrome, Edge, and Safari.
        */

        abbr[title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        /**
        Add the correct font weight in Edge and Safari.
        */

        b,
        strong {
            font-weight: bolder;
        }

        /**
        1. Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3)
        2. Correct the odd 'em' font sizing in all browsers.
        */

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace,
            SFMono-Regular,
            Consolas,
            'Liberation Mono',
            Menlo,
            monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
        }

        /**
        Add the correct font size in all browsers.
        */

        small {
            font-size: 80%;
        }

        /**
        Prevent 'sub' and 'sup' elements from affecting the line height in all browsers.
        */

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /*
        Tabular data
        ============
        */

        /**
        1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
        2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
        */

        table {
            text-indent: 0;
            /* 1 */
            border-color: inherit;
            /* 2 */
        }

        /*
        Forms
        =====
        */

        /**
        1. Change the font styles in all browsers.
        2. Remove the margin in Firefox and Safari.
        */

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            line-height: 1.15;
            /* 1 */
            margin: 0;
            /* 2 */
        }

        /**
        Remove the inheritance of text transform in Edge and Firefox.
        1. Remove the inheritance of text transform in Firefox.
        */

        button,
        select {
            /* 1 */
            text-transform: none;
        }

        /**
        Correct the inability to style clickable types in iOS and Safari.
        */

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
        }

        /**
        Remove the inner border and padding in Firefox.
        */

        ::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        /**
        Restore the focus styles unset by the previous rule.
        */

        :-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        /**
        Remove the additional ':invalid' styles in Firefox.
        See: https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737
        */

        :-moz-ui-invalid {
            box-shadow: none;
        }

        /**
        Remove the padding so developers are not caught out when they zero out 'fieldset' elements in all browsers.
        */

        legend {
            padding: 0;
        }

        /**
        Add the correct vertical alignment in Chrome and Firefox.
        */

        progress {
            vertical-align: baseline;
        }

        /**
        Correct the cursor style of increment and decrement buttons in Safari.
        */

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        /**
        1. Correct the odd appearance in Chrome and Safari.
        2. Correct the outline style in Safari.
        */

        [type='search'] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        /**
        Remove the inner padding in Chrome and Safari on macOS.
        */

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /**
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Change font properties to 'inherit' in Safari.
        */

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        /*
        Interactive
        ===========
        */

        /*
        Add the correct display in Chrome and Safari.
        */

        summary {
            display: list-item;
        }

        /**
         * Manually forked from SUIT CSS Base: https://github.com/suitcss/base
         * A thin layer on top of normalize.css that provides a starting point more
         * suitable for web applications.
         */

        /**
         * Removes the default spacing and border for appropriate elements.
         */

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        button {
            background-color: transparent;
            background-image: none;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /**
         * Tailwind custom reset styles
         */

        /**
         * 1. Use the user's configured `sans` font-family (with Tailwind's default
         *    sans-serif font stack as a fallback) as a sane default.
         * 2. Use Tailwind's default "normal" line-height so the user isn't forced
         *    to override it to ensure consistency even when using the default theme.
         */

        html {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* 1 */
            line-height: 1.5;
            /* 2 */
        }

        /**
         * Inherit font-family and line-height from `html` so users can set them as
         * a class directly on the `html` element.
         */

        body {
            font-family: inherit;
            line-height: inherit;
        }

        /**
         * 1. Prevent padding and border from affecting element width.
         *
         *    We used to set this in the html element and inherit from
         *    the parent element for everything else. This caused issues
         *    in shadow-dom-enhanced elements like <details> where the content
         *    is wrapped by a div with box-sizing set to `content-box`.
         *
         *    https://github.com/mozdevs/cssremedy/issues/4
         *
         *
         * 2. Allow adding a border to an element by just adding a border-width.
         *
         *    By default, the way the browser specifies that an element should have no
         *    border is by setting it's border-style to `none` in the user-agent
         *    stylesheet.
         *
         *    In order to easily add borders to elements by just setting the `border-width`
         *    property, we change the default border-style for all elements to `solid`, and
         *    use border-width to hide them instead. This way our `border` utilities only
         *    need to set the `border-width` property instead of the entire `border`
         *    shorthand, making our border utilities much more straightforward to compose.
         *
         *    https://github.com/tailwindcss/tailwindcss/pull/116
         */

        *,
        ::before,
        ::after {
            box-sizing: border-box;
            /* 1 */
            border-width: 0;
            /* 2 */
            border-style: solid;
            /* 2 */
            border-color: currentColor;
            /* 2 */
        }

        /*
         * Ensure horizontal rules are visible by default
         */

        hr {
            border-top-width: 1px;
        }

        /**
         * Undo the `border-style: none` reset that Normalize applies to images so that
         * our `border-{width}` utilities have the expected effect.
         *
         * The Normalize reset is unnecessary for us since we default the border-width
         * to 0 on all elements.
         *
         * https://github.com/tailwindcss/tailwindcss/issues/362
         */

        img {
            border-style: solid;
        }

        textarea {
            resize: vertical;
        }

        input::-moz-placeholder, textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        input:-ms-input-placeholder, textarea:-ms-input-placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        button,
        [role="button"] {
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        /**
         * Reset links to optimize for opt-in styling instead of
         * opt-out.
         */

        a {
            color: inherit;
            text-decoration: inherit;
        }

        /**
         * Reset form element properties that are easy to forget to
         * style explicitly so you don't inadvertently introduce
         * styles that deviate from your design system. These styles
         * supplement a partial reset that is already applied by
         * normalize.css.
         */

        button,
        input,
        optgroup,
        select,
        textarea {
            padding: 0;
            line-height: inherit;
            color: inherit;
        }

        /**
         * Use the configured 'mono' font family for elements that
         * are expected to be rendered with a monospace font, falling
         * back to the system monospace stack if there is no configured
         * 'mono' font family.
         */

        pre,
        code,
        kbd,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        /**
         * 1. Make replaced elements `display: block` by default as that's
         *    the behavior you want almost all of the time. Inspired by
         *    CSS Remedy, with `svg` added as well.
         *
         *    https://github.com/mozdevs/cssremedy/issues/14
         *
         * 2. Add `vertical-align: middle` to align replaced elements more
         *    sensibly by default when overriding `display` by adding a
         *    utility like `inline`.
         *
         *    This can trigger a poorly considered linting error in some
         *    tools but is included by design.
         *
         *    https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210
         */

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            /* 1 */
            vertical-align: middle;
            /* 2 */
        }

        /**
         * Constrain images and videos to the parent width and preserve
         * their intrinsic aspect ratio.
         *
         * https://github.com/mozdevs/cssremedy/issues/14
         */

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        *, ::before, ::after {
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-border-opacity: 1;
            border-color: rgba(229, 231, 235, var(--tw-border-opacity));
            --tw-shadow: 0 0 #0000;
            --tw-ring-inset: var(--tw-empty, /*!*/ /*!*/);
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-blur: var(--tw-empty, /*!*/ /*!*/);
            --tw-brightness: var(--tw-empty, /*!*/ /*!*/);
            --tw-contrast: var(--tw-empty, /*!*/ /*!*/);
            --tw-grayscale: var(--tw-empty, /*!*/ /*!*/);
            --tw-hue-rotate: var(--tw-empty, /*!*/ /*!*/);
            --tw-invert: var(--tw-empty, /*!*/ /*!*/);
            --tw-saturate: var(--tw-empty, /*!*/ /*!*/);
            --tw-sepia: var(--tw-empty, /*!*/ /*!*/);
            --tw-drop-shadow: var(--tw-empty, /*!*/ /*!*/);
            --tw-filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
            --tw-backdrop-blur: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-brightness: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-contrast: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-grayscale: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-hue-rotate: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-invert: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-opacity: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-saturate: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-sepia: var(--tw-empty, /*!*/ /*!*/);
            --tw-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .fixed {
            position: fixed;
        }

        .inset-0 {
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
        }

        .m-\[8px\] {
            margin: 8px;
        }

        .mx-\[8px\] {
            margin-left: 8px;
            margin-right: 8px;
        }

        .my-\[16px\] {
            margin-top: 16px;
            margin-bottom: 16px;
        }

        .inline-block {
            display: inline-block;
        }

        .flex {
            display: flex;
        }

        .hidden {
            display: none;
        }

        .h-screen {
            height: 100vh;
        }

        .h-\[60px\] {
            height: 60px;
        }

        .h-\[30px\] {
            height: 30px;
        }

        .h-\[32px\] {
            height: 32px;
        }

        .h-\[28px\] {
            height: 28px;
        }

        .h-\[40px\] {
            height: 40px;
        }

        .h-\[45px\] {
            height: 45px;
        }

        .w-\[245px\] {
            width: 245px;
        }

        .w-\[120px\] {
            width: 120px;
        }

        .w-full {
            width: 100%;
        }

        .flex-col {
            flex-direction: column;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .space-y-\[16px\] > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(16px * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(16px * var(--tw-space-y-reverse));
        }

        .rounded-xl {
            border-radius: 0.75rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .border-b {
            border-bottom-width: 1px;
        }

        .border-\[\#5c5d61\] {
            --tw-border-opacity: 1;
            border-color: rgba(92, 93, 97, var(--tw-border-opacity));
        }

        .bg-\[\#7396ad\] {
            --tw-bg-opacity: 1;
            background-color: rgba(115, 150, 173, var(--tw-bg-opacity));
        }

        .bg-\[\#181a1f\] {
            --tw-bg-opacity: 1;
            background-color: rgba(24, 26, 31, var(--tw-bg-opacity));
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        }

        .bg-opacity-40 {
            --tw-bg-opacity: 0.4;
        }

        .bg-opacity-80 {
            --tw-bg-opacity: 0.8;
        }

        .bg-opacity-\[65\%\] {
            --tw-bg-opacity: 65%;
        }

        .bg-model-3 {
            background-image: url('/img/bg/bg_index.jpg');
        }

        .bg-cover {
            background-size: cover;
        }

        .bg-center {
            background-position: center;
        }

        .bg-no-repeat {
            background-repeat: no-repeat;
        }

        .px-\[8px\] {
            padding-left: 8px;
            padding-right: 8px;
        }

        .py-\[4px\] {
            padding-top: 4px;
            padding-bottom: 4px;
        }

        .px-\[20px\] {
            padding-left: 20px;
            padding-right: 20px;
        }

        .pl-\[8px\] {
            padding-left: 8px;
        }

        .pr-\[8px\] {
            padding-right: 8px;
        }

        .pl-\[16px\] {
            padding-left: 16px;
        }

        .pr-\[32px\] {
            padding-right: 32px;
        }

        .pt-\[16vh\] {
            padding-top: 16vh;
        }

        .pb-\[120px\] {
            padding-bottom: 120px;
        }

        .pb-\[8px\] {
            padding-bottom: 8px;
        }

        .text-center {
            text-align: center;
        }

        .text-\[14px\] {
            font-size: 14px;
        }

        .text-\[12px\] {
            font-size: 12px;
        }

        .text-\[36px\] {
            font-size: 36px;
        }

        .font-medium {
            font-weight: 500;
        }

        .font-light {
            font-weight: 300;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .leading-\[36px\] {
            line-height: 36px;
        }

        .leading-normal {
            line-height: 1.5;
        }

        .tracking-wider {
            letter-spacing: 0.05em;
        }

        .tracking-wide {
            letter-spacing: 0.025em;
        }

        .text-\[\#181b21\] {
            --tw-text-opacity: 1;
            color: rgba(24, 27, 33, var(--tw-text-opacity));
        }

        .text-\[\#393c41\] {
            --tw-text-opacity: 1;
            color: rgba(57, 60, 65, var(--tw-text-opacity));
        }

        .text-\[\#5c5d61\] {
            --tw-text-opacity: 1;
            color: rgba(92, 93, 97, var(--tw-text-opacity));
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .transition {
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .duration-500 {
            transition-duration: 500ms;
        }

        .hover\:border-b-2:hover {
            border-bottom-width: 2px;
        }

        .hover\:border-\[\#181b21\]:hover {
            --tw-border-opacity: 1;
            border-color: rgba(24, 27, 33, var(--tw-border-opacity));
        }

        .hover\:bg-\[\#7396ad\]:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(115, 150, 173, var(--tw-bg-opacity));
        }

        .hover\:bg-opacity-40:hover {
            --tw-bg-opacity: 0.4;
        }

        .hover\:text-\[\#181b21\]:hover {
            --tw-text-opacity: 1;
            color: rgba(24, 27, 33, var(--tw-text-opacity));
        }

        @media (min-width: 600px) {
            .tablet\:h-\[32px\] {
                height: 32px;
            }

            .tablet\:w-auto {
                width: auto;
            }

            .tablet\:w-\[256px\] {
                width: 256px;
            }

            .tablet\:flex-row {
                flex-direction: row;
            }

            .tablet\:space-x-\[25px\] > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(25px * var(--tw-space-x-reverse));
                margin-left: calc(25px * calc(1 - var(--tw-space-x-reverse)));
            }

            .tablet\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0px * var(--tw-space-y-reverse));
            }

            .tablet\:py-\[4px\] {
                padding-top: 4px;
                padding-bottom: 4px;
            }

            .tablet\:pl-\[16px\] {
                padding-left: 16px;
            }

            .tablet\:pr-\[16px\] {
                padding-right: 16px;
            }

            .tablet\:pb-\[40px\] {
                padding-bottom: 40px;
            }

            .tablet\:text-\[13px\] {
                font-size: 13px;
            }

            .tablet\:text-\[40px\] {
                font-size: 40px;
            }

            .tablet\:leading-\[21px\] {
                line-height: 21px;
            }

            .tablet\:leading-\[1\.15\] {
                line-height: 1.15;
            }

            .tablet\:tracking-wider {
                letter-spacing: 0.05em;
            }
        }

        @media (min-width: 1200px) {
            .desktop\:flex {
                display: flex;
            }

            .desktop\:hidden {
                display: none;
            }

            .desktop\:h-\[54px\] {
                height: 54px;
            }

            .desktop\:h-\[32px\] {
                height: 32px;
            }

            .desktop\:w-auto {
                width: auto;
            }

            .desktop\:w-\[256px\] {
                width: 256px;
            }

            .desktop\:flex-row {
                flex-direction: row;
            }

            .desktop\:space-x-\[25px\] > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(25px * var(--tw-space-x-reverse));
                margin-left: calc(25px * calc(1 - var(--tw-space-x-reverse)));
            }

            .desktop\:space-y-0 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0px * var(--tw-space-y-reverse));
            }

            .desktop\:rounded-2xl {
                border-radius: 1rem;
            }

            .desktop\:py-\[4px\] {
                padding-top: 4px;
                padding-bottom: 4px;
            }

            .desktop\:px-0 {
                padding-left: 0px;
                padding-right: 0px;
            }

            .desktop\:pl-\[32px\] {
                padding-left: 32px;
            }

            .desktop\:pt-\[calc\(13vh\+20px\)\] {
                padding-top: calc(13vh + 20px);
            }

            .desktop\:pb-\[55px\] {
                padding-bottom: 55px;
            }

            .desktop\:text-\[14px\] {
                font-size: 14px;
            }

            .desktop\:text-\[42px\] {
                font-size: 42px;
            }

            .desktop\:leading-\[1\.15\] {
                line-height: 1.15;
            }

            .desktop\:tracking-wider {
                letter-spacing: 0.05em;
            }
        }

        @media (orientation: portrait) {
            .portrait\:bg-mobile-model-3 {
                background-image: url('/img/bg/bg_mobile_v2.jpg');
            }
        }

        @media (min-width: 600px) {
            @media (orientation: portrait) {
                .tablet\:portrait\:pb-\[78px\] {
                    padding-bottom: 78px;
                }
            }
        }
    </style>

    <style>
        body {
            font-family: 'Play';
        }
    </style>
</head>
<body
    class="flex flex-col items-center h-screen bg-center bg-cover bg-no-repeat portrait:bg-mobile-model-3 bg-model-3 antialiased">
<header class="flex justify-between fixed inset-0 h-[60px] desktop:h-[54px] bg-[#181a1f]">
    <div class="flex items-center pl-[8px] tablet:pl-[16px] desktop:pl-[32px] w-[245px]">
        <a href="#" class="inline-block pr-[8px] pl-[16px]">
            <img class="h-[45px]" src="/img/logo/v2/LegionAuto.svg" alt="Legion Auto"/>
        </a>
    </div>
    <ul class="hidden desktop:flex items-center text-white px-[8px]">
        <li>
            <a href="#"
               class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            О компании
          </span>
            </a>
        </li>
        <li>
            <a href="#"
               class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            Авто в наличии
          </span>
            </a>
        </li>
        <li>
            <a href="#"
               class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            Авто с пробегом
          </span>
            </a>
        </li>
        <li>
            <a href="#"
               class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            Особые предложения
          </span>
            </a>
        </li>
        <li>
            <a href="#"
               class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            Сервис
          </span>
            </a>
        </li>
        <li>
            <a href="#"
               class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            Фин услуги
          </span>
            </a>
        </li>
    </ul>
    <ul class="hidden desktop:flex items-center text-white pr-[32px]">
        <li>
            <a href="#"
               class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            8 800 900-77-07
          </span>
            </a>
        </li>
        <li>
            @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}"
                   class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            Панель управления
          </span>
                </a>
                @else
                    <a href="{{ route('login') }}"
               class="inline-block rounded-xl font-medium tracking-wider transition duration-500 flex justify-center items-center hover:bg-[#7396ad] hover:bg-opacity-40 text-[14px] py-[4px] px-[8px] h-[32px]">
          <span class="m-[8px]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" style="width: 20px; height: 20px;">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
</svg>
          </span>
            </a>
                @endauth
            @endif
        </li>
    </ul>
    <ul class="flex items-center desktop:hidden pr-[8px] tablet:pr-[16px]">
        <li>
            <a href="#" class="inline-block rounded-xl font-medium tablet:leading-[21px] leading-normal tracking-wider transition duration-500 flex justify-center items-center bg-[#7396ad] bg-opacity-40 text-[12px] tablet:text-[13px]
        tablet:py-[4px] px-[8px] h-[28px] tablet:h-[32px]">
          <span class="mx-[8px]">
            Меню
          </span>
            </a>
        </li>
    </ul>
</header>
<div class="flex flex-col h-screen justify-between pt-[16vh] desktop:pt-[calc(13vh+20px)]
                pb-[120px] tablet:pb-[40px] tablet:portrait:pb-[78px] desktop:pb-[55px] w-full tablet:w-auto">
    <div class="text-center">
        <h1 class="font-medium tracking-wide tablet:tracking-wider leading-[36px] tablet:leading-[1.15] text-[#393c41]
      text-[36px] tablet:text-[40px] desktop:text-[42px] py-[4px]">
            Новые автомобили
        </h1>
        <h2 class="font-light tracking-wide desktop:tracking-wider text-[#5c5d61] text-[14px] pb-[8px]">
            <a href="#"
               class="transition border-b hover:border-b-2 border-[#5c5d61] hover:border-[#181b21] hover:text-[#181b21]">
                Mercedes-Benz
            </a>
            <a href="#"
               class="transition border-b hover:border-b-2 border-[#5c5d61] hover:border-[#181b21] hover:text-[#181b21]" style="margin-left: 1rem;margin-right: 1rem;">
                BMW
            </a>
            <a href="#"
               class="transition border-b hover:border-b-2 border-[#5c5d61] hover:border-[#181b21] hover:text-[#181b21]">
                Audi
            </a>
        </h2>
    </div>
    <div class="flex flex-col tablet:flex-row justify-center items-center tablet:space-x-[25px] space-y-[16px]
                tablet:space-y-0 my-[16px] px-[20px]">
        <a href="#"
           class="inline-block rounded-full desktop:rounded-2xl text-center text-white tracking-wider font-medium uppercase flex justify-center items-center bg-opacity-80 bg-[#181a1f] text-[12px] w-full tablet:w-[256px] h-[40px]">
            Все модели
        </a>
        <a href="#"
           class="inline-block rounded-full desktop:rounded-2xl text-center text-white tracking-wider font-medium uppercase flex justify-center items-center bg-[#181a1f] bg-opacity-80 text-[12px] w-full tablet:w-[256px] h-[40px]">
            Онлайн помощь
        </a>
    </div>
</div>
<!--
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
            @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
@auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Панель управления</a>
                    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Вход</a>

                        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Регистрация</a>
                        @endif
    @endauth
        </div>
@endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img src="/img/logo/v2/LegionAuto_Black.png" alt="Legion Auto" style="height: 6rem;"/>
        </div>

        <div class="flex justify-center mt-4">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">

                </div>
            </div>

            <div class="text-center text-sm text-gray-500">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
        -->
</body>
</html>
