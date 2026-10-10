<footer class="admin-footer">
    <div class="footer-content">
        <div class="footer-left">
            <p>&copy; 2024 - 2026 <strong>AdminCP Panel</strong>. Thiết kế bởi <span class="author-name">Kha Smart Design</span></p>
        </div>
        
        <div class="footer-right">
            <ul class="footer-links">
                <li><a href="index.php">Bảng điều khiển</a></li>
                <li><a href="https://google.com" target="_blank">Hỗ trợ kỹ thuật</a></li>
            </ul>
        </div>
    </div>
</footer>

<style>
    .admin-footer {
        background: #fff;
        padding: 20px 0;
        margin-top: 40px;
        border-top: 1px solid #edf2f7;
        color: #718096;
        font-size: 14px;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    .footer-left strong {
        color: #2d3748;
    }

    .author-name {
        color: #3182ce;
        font-weight: 600;
    }

    .footer-links {
        list-style: none;
        display: flex;
        gap: 20px;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    .footer-links li a {
        text-decoration: none;
        color: #718096;
        transition: 0.3s;
    }

    .footer-links li a:hover {
        color: #3182ce;
    }

    .version-tag {
        background: #f7fafc;
        color: #4a5568;
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 12px;
        border: 1px solid #e2e8f0;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }
        
        .footer-links {
            justify-content: center;
            flex-wrap: wrap;
        }
    }
</style>