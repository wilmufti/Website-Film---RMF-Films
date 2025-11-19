<style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #1e1e2f;
            color: #f5f6fa;
            padding: 30px;
        }
        .form-container {
            background: #2a2a3b;
            padding: 30px;
            max-width: 900px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-top: 20px;
            font-weight: 600;
            color: #dcdde1;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            background: #3a3a4f;
            color: #ffffff;
            border: 1px solid #555;
            border-radius: 6px;
            font-size: 14px;
        }
        input::placeholder,
        textarea::placeholder {
            color: #999;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }
        button:hover {
            background: #2980b9;
        }
        .btn-secondary {
            background: #7f8c8d;
            color: white;
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 6px;
        }
        .btn-secondary:hover {
            background: #95a5a6;
        }
        .multi-field {
            background: #353546;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
            border: 1px solid #444;
            position: relative;
        }
        .multi-field img.preview {
            max-width: 80px;
            max-height: 80px;
            margin-top: 8px;
            border-radius: 4px;
            border: 1px solid #777;
        }
        .remove-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 4px 8px;
            cursor: pointer;
        }
        .remove-btn:hover {
            background: #c0392b;
        }
    </style>