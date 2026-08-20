FROM webdevops/php-nginx

ENV PHP_DATE_TIMEZONE=America/Sao_Paulo
ENV php.open_basedir=/web

# Dependências para envio de e-mail do MRBS
RUN pear install mail \
    && pear install Net_SMTP \
    && pear install Auth_SASL \
    && pear install mail_mime

RUN ln -snf /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime