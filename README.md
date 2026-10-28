# E-commerce Vinícola Brasília

Código do e-commerce publicado em `vinicolabrasilia.com.br` (HostGator).

## Deploy automático

Todo push na branch `main` que altere arquivos em `src/` dispara o workflow
`.github/workflows/deploy-ftp.yml`, que envia o conteúdo de `src/` por FTP.

- Raiz da conta FTP: `/home3/vinico02/public_html`
- `src/arquivo.php` → `public_html/arquivo.php`
- `src/loja/index.php` → `public_html/loja/index.php`
- Arquivos que já estão no servidor e não vieram do repositório (WordPress, `gestao/`, etc.) **não são apagados**.
- Também dá para rodar manualmente em **Actions → Deploy FTP - HostGator → Run workflow**.

### Secrets necessários (Settings → Secrets and variables → Actions)

| Secret | Exemplo |
|---|---|
| `FTP_SERVER` | `ftp.vinicolabrasilia.com.br` |
| `FTP_USERNAME` | `usuario@vinicolabrasilia.com.br` |
| `FTP_PASSWORD` | senha da conta FTP |

## Cuidados

- O repositório é **público**: não suba `config.php`, `.env`, `wp-config.php` ou dumps `.sql`
  (já estão no `.gitignore`). Crie esses arquivos direto no servidor.
- Não coloque um `index.php` na raiz de `src/` — ele substituiria o do WordPress.
  Use uma subpasta (ex.: `src/loja/`).
