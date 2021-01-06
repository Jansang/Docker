ARG VERSION
FROM redis:${VERSION}

# 设置时区
ARG TZ
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone