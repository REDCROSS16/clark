FROM gitlab.itsupportme.by:5005/docker-images/php/8.1-lamp:ubuntu-20 AS web

ARG XDEBUG=0

COPY .docker/bin/web-entrypoint /usr/local/bin/docker-entrypoint

WORKDIR "/srv/www"

RUN [ ${XDEBUG} -gt 0 ] && phpenxdebug && echo "XDebug Enabled" || echo "XDebug NOT Enabled"

ENTRYPOINT ["docker-entrypoint"]

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]