FROM golang:alpine

#ARG HOSTNAME
#ARG SMTP_PORT=587
#ARG API_PORT=8025
#ARG UI_PORT=8025
#ARG STORAGE="maildir"

# Configure MailHog
#ENV MH_HOSTNAME="${HOSTNAME}" \
#    MH_SMTP_BIND_ADDR="0.0.0.0:${SMTP_PORT}" \
#    MH_API_BIND_ADDR="0.0.0.0:${API_PORT}" \
#    MH_UI_BIND_ADDR="0.0.0.0:${UI_PORT}" \
#    MH_STORAGE="${STORAGE}" \
#    MH_MAILDIR_PATH="/srv/Maildir"

# Install dependences
RUN apk --no-cache add git

# Build et install aMailHog
RUN go get github.com/mailhog/MailHog

# Build et install mhsendmail
RUN go get github.com/mailhog/mhsendmail

# Volumes
RUN mkdir -p /srv/Maildir;
VOLUME /srv/Maildir

# Ports SMTP (587) et HTTP (8025)
EXPOSE 587 8025

# démarer server Mailhog
ENTRYPOINT ["MailHog"]