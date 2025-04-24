# Moodle Plugin: Original Course ID

Este é um plugin local para Moodle 4.5 que adiciona um item de menu no curso, permitindo que usuários autorizados visualizem o **ID do curso original** (`originalcourseid`) associado ao curso atual caso o curso tenha sido duplicado.

## 📦 Nome do plugin

`local_originalcourseid`

---

## 🔍 Funcionalidade

- Adiciona um item de menu lateral em cada curso, visível apenas para usuários com permissão.
- Ao clicar no item, o usuário é redirecionado para uma página que exibe o campo `originalcourseid` do curso atual.
- Se o campo estiver preenchido, exibe um botão que leva ao curso original em uma nova aba.

---

## 🛠️ Instalação

1. Copie o conteúdo deste repositório para o diretório:
   ```
   moodle/local/originalcourseid
   ```
2. Acesse a interface administrativa do Moodle.
3. Siga o processo de atualização de plugins para instalar.

---

## 🔐 Permissões

Este plugin define a capacidade:

```
local/originalcourseid:view
```

Essa permissão **deve ser atribuída** aos papéis que devem visualizar o item de menu e acessar a página. Por padrão, ela é permitida para os papéis:

- `teacher`
- `manager`

Você pode atribuir ou revogar essa permissão em:

```
Administração do site > Usuários > Permissões > Definir papéis
```

---

## 💡 Exemplo de uso

- Curso com ID `20778` e campo `originalcourseid = 12345`
- Menu "Acessar curso original" aparece
- Clique abre: `https://seumoodle/course/view.php?id=12345`

---

## 📁 Estrutura do plugin

```plaintext
local/originalcourseid/
├── db/
│   └── access.php
├── lang/
│   └── en/
│       └── local_originalcourseid.php
├── lib.php
├── version.php
└── index.php
```

---

## 📌 Requisitos

- Moodle 4.5 ou superior

---

## 🧑‍💻 Autor

Desenvolvido por Bruno Henrique da Silva Mosko.

---

## 📄 Licença

Este plugin é distribuído sob a licença [GPL v3](https://www.gnu.org/licenses/gpl-3.0.html), em conformidade com os termos do Moodle.
