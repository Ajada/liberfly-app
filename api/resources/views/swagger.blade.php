<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swagger-ui.css') }}">
</head>
<body>
    <div id="swagger-ui"></div>

    <script src="{{ asset('js/swagger-ui-bundle.js') }}"></script>
    <script src="{{ asset('js/swagger-ui-standalone-preset.js') }}"></script>
    <script>
        window.onload = function() {
            const ui = SwaggerUIBundle({
                url: "/api/documentation-json", // URL para o arquivo JSON do Swagger
                dom_id: '#swagger-ui',
                presets: [
                    SwaggerUIBundle.presets.apis,
                    SwaggerUIStandalonePreset
                ],
                layout: "BaseLayout",
                deepLinking: true,
                docExpansion: "none"
            });
        };
    </script>
</body>
</html>
